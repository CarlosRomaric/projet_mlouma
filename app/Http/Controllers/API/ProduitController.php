<?php

namespace App\Http\Controllers\API;

use App\Models\Farmer;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController;

class ProduitController extends BaseController
{
   public function __construct(){

        $this->middleware('auth:api');
   }

   public function getProductDistributionHistory(Request $request){

        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }

        if(!empty($request->farmerId)){
            $farmer = Farmer::find($request->farmerId);
            if(!empty($farmer)){
                $products = Produit::where('farmer_id',$request->farmerId)->get();
                $success['products'] = collect($products)->except(['created_at','updated_at']);
                return $this->sendResponse($success, 'liste des parcelles du producteur '.$farmer->fullname);
           }else{
               return $this->sendError('error.', ['error'=>'ce producteur n\'existe pas sur notre plateforme']);
           }

        }else{
            return $this->sendError('error.', ['error'=>'vous devez ajouter un producteur pour obtenir l\'historique des distribution de produits']);
        }
   }    

   public function store(Request $request){

        $data = Validator::make($request->all(),[
                'type_produit_id'=>'required',
                'farmer_id'=>'required',
                'user_id'=>'required',
                'name'=>'required',
                'qte'=>'required',
                'distribution_date'=>'required'
                
        ],[
            'type_produit_id.required'=>'le choix du type de produit est obligatoire',
            'farmer_id.required'=>'le producteur est obligatoire',
            'user_id.required'=>'l\'identifiant de l\'agent  est obligatoire',
            'name.required'=>'le nom du produit est obligatoire',
            'qte.required'=>'Vous devez renseigner la qte du produit a distribué',
            'distribution_date.required'=>'vous devez renseigner la date de la distribution du produit'
        ]);

        if($data->fails()){
            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
            $farmer = Farmer::find($request->get('farmer_id'));
            $produits = Produit::create($request->all());
            $success['produits'] = $produits;
            return $this->sendResponse($success, 'la distribution du produit '.$request->get('name').' au producteur '.$farmer->fullname.' a bien été effectué'); 
        }
   }
}
