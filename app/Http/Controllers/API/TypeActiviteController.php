<?php

namespace App\Http\Controllers\API;

use App\Models\TypeActivite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController;

class TypeActiviteController extends BaseController
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
        
        $typeActivites = TypeActivite::orderBy('created_at','DESC')->get();
      
         if(!empty($typeActivites)){

            $success['typeActivites']= collect($typeActivites)->except(['created_at','updated_at']);
           
            return $this->sendResponse($success, 'liste des type d\'activité');

         }else{

            $this->sendError('Error','Aucun type d\'entretien définie');
         }
    }
}
