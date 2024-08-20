<?php

namespace App\Http\Controllers\API;

use App\Models\Plot;
use App\Models\Recolte;
use App\Models\Speculation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RecolteController extends Controller
{
    public function __contruct(){
        $this->middleware("auth:api");
    }

    public function index()
    {
        $recoltes = Recolte::orderBy('created_at','DESC')->get();
        $success['recoltes']=$recoltes;
        return $this->sendResponse($success, 'liste des recoltes');
    }

    public function store(Request $request){
        $data = Validator::make($request->all(),[
            'plot_id'=>'required',
            'speculation_id'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
           
        ],[
            'plot_id.required'=>'le choix de la parcelle est obligatoire',
            'speculation_id.required'=>'le choix de la speculation est obligatoire',
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
                $recolte = Recolte::create($request->all());
                
                $success['Recolte']=$recolte;
                return $this->sendResponse($success, 'l\'enregistrement de la recolte a bien été enregistré');
            }else{
                return $this->sendError('erreur','la parcelle ou la speculation est inexistante', 401);
            }
        }
    }
}
