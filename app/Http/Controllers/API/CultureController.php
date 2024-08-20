<?php

namespace App\Http\Controllers\API;

use App\Models\Plot;
use App\Models\Culture;
use App\Models\Speculation;
use Illuminate\Http\Request;
use App\Models\PlotSpeculation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Culture\CultureRequest;
use App\Http\Controllers\API\BaseController as BaseController;

class CultureController extends BaseController
{
    public function __construct()
    {
        $this->middleware("auth:api");
    }
    /**
     * Mise en place de la culture
     */
    public function store(Request $request)
    {
        
            $data = Validator::make($request->all(),[
                    'plot_id'=>'required',
                    'speculation_id'=>'required',
                    'date_debut'=>'required',
                    'date_fin'=>'required',
                   
            ],[
                'plot_id.required'=>'le choix de la parcelle est obligatoire',
                'speculation_id.required'=>'le choix de la speculation est obligatoire',
                'name.required'=>'le nom de la culture est obligatoire',
                'date_debut.required'=>'Vous devez renseigner la date de mise en place de la culture',
                'date_fin.required'=>'vous devez renseigner la date provisoire de la récolte'
            ]);
            if ($data->fails()) {

                return $this->sendError('une erreur s\'est produite', $data->errors());

            }else{
                $speculation = Speculation::find($request->speculation_id);
                $plot = Plot::find($request->plot_id);
                if(!empty($speculation) && !empty($plot)){
                    //dd($request->all());
                    $culture = PlotSpeculation::create($request->all());
                    // $culture = new PlotSpeculation();
                    // $culture->plot_id = $request->plot_id;
                    // $culture->speculation_id = $request->speculation_id;
                    // $culture->date_debut = $request->date_debut;
                    // $culture->date_fin = $request->date_fin;
                    // $culture->save();
                    $success['culture']=$culture;
                    return $this->sendResponse($success, 'la mise en place de la culture a  été éffectué avec success');
                }else{
                    return $this->sendError('erreur','la parcelle ou la speculation est inexistante', 401);
                }
               
            }
        
    }   

    public function getCultureByPlot(Request $request){
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }

        if(!empty($request->plot_id)){
            $plot = Plot::find($request->plot_id);
            if(!empty($plot)){
                $culture= $plot->speculations;
                $success['culture']= collect($culture)->except(['created_at','updated_at']);
                return $this->sendResponse($success, 'liste des cultures de cette parcelle '.$plot->gps_code);
            }else{
                return $this->sendError('error.', ['error'=>'cette parcelle n\'existe pas sur notre plateforme']);
            }
        }else{
            return $this->sendError('error.', ['error'=>'vous devez choisir la parcelle pour afficher les cultures mise en place dessus']);

        }
    }   

     /**
     * Synchronisation des cultures
     */
    public function synchronizeCultures(Request $request)
    {
        // Validation des données
        $data = Validator::make($request->all(), [
            'data' => 'required|array',
            'data.*.farmer_id' => 'required|uuid',
            'data.*.plot_id' => 'required|uuid',
            'data.*.speculation_id' => 'required|uuid',
            'data.*.date_debut' => 'required|date',
            'data.*.date_fin' => 'required|date',
        ]);

        if ($data->fails()) {
            return $this->sendError('une erreur s\'est produite', $data->errors());
        }

        // Traitement de chaque enregistrement
        $cultures = [];
        dd($request->data);
        foreach ($request->data as $cultureData) {
            $speculation = Speculation::find($cultureData['speculation_id']);
            $plot = Plot::find($cultureData['plot_id']);

            if (!empty($speculation) && !empty($plot)) {
                $culture = PlotSpeculation::updateOrCreate(
                    [
                        'plot_id' => $cultureData['plot_id'],
                        'speculation_id' => $cultureData['speculation_id'],
                    ],
                    [
                        'date_debut' => $cultureData['date_debut'],
                        'date_fin' => $cultureData['date_fin'],
                    ]
                );
                $cultures[] = $culture;
            }
        }

        $success['cultures'] = $cultures;
        return $this->sendResponse($success, 'Les cultures ont été synchronisées avec succès');
    }
   
}
