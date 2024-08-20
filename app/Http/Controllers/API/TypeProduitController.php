<?php

namespace App\Http\Controllers\API;

use App\Models\TypeProduit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Categorie;


class TypeProduitController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(){
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }
        
        $typeProduits = TypeProduit::orderBy('created_at','DESC')->get();
        //dd($typeProduits);
         if(!empty($typeProduits)){

            $success['typeProduits']= collect($typeProduits)->except(['created_at','updated_at']);
           
            return $this->sendResponse($success, 'liste des type de produits');

         }else{

            $this->sendError('Error','Aucun type de produit définie');
         }
    }

    public function listingTypeProductsByCategory(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }
        $categorie = Categorie::find($request->categorie_id);
        $typeProduits = TypeProduit::where('categorie_id',$request->categorie_id)
                                    ->orderBy('created_at','DESC')
                                    ->get();
        //dd($typeProduits);
        if(!empty($categorie)){
            if(!empty($typeProduits)){

                $success['typeProduits']= collect($typeProduits)->except(['created_at','updated_at']);
               
                return $this->sendResponse($success, 'liste des type de produits');
    
             }else{
    
                $this->sendError('Error','Aucun type de produit définie');
             }
        }else{
            return $this->sendError('Error',"cette catégorie n'existe pas sur notre plateforme");
        }
        
    }
}
