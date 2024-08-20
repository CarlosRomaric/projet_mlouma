<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController;
use App\Models\Categorie;

class CategorieController extends BaseController
{
    public function __construct()
    {
        $this->middleware("auth:api");
    }


    public function index(){
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }
        
        $categories = Categorie::orderBy('created_at','DESC')->get();
        //dd($categories);
         if(!empty($categories)){

            $success['categories']= collect($categories)->except(['created_at','updated_at']);
           
            return $this->sendResponse($success, 'liste des Categories de produits');

         }else{
            
            $this->sendError('Error','Aucun type de produit définie');
         }
    }

}
