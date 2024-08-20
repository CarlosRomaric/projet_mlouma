<?php

namespace App\Http\Controllers\API;

use App\Models\Plot;
use App\Models\Farmer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;

class PlotsController extends BaseController
{
    /**
     * PlotsController  constructor
     */
    public function __construct(){
        $this->middleware('auth:api');
    }


    public function getPlotsByFarmer(Request $request){
       
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }

        if(!empty($request->farmerId)){
            $farmer = Farmer::find($request->farmerId);
            if(!empty($farmer)){
                //dd($farmer);
                 $plots = Plot::where('farmer_id',$request->farmerId)->get();
                 $success['plots'] = collect($plots)->except(['created_at','updated_at']);
                 return $this->sendResponse($success, 'liste des parcelles du producteur '.$farmer->fullname);
            }else{
                return $this->sendError('error.', ['error'=>'ce producteur n\'existe pas sur notre plateforme']);
            }
           
        }else{
            return $this->sendError('error.', ['error'=>'vous devez ajouter un producteur pour avoir la liste de ces parcelles']);
        }
       
    }
    
}
