<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\TypeEntretien;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController;

class TypeEntretienController extends BaseController
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
        
        $typeEntretiens = TypeEntretien::orderBy('created_at','DESC')->get();
      
         if(!empty($typeEntretiens)){

            $success['typeEntretiens']= collect($typeEntretiens)->except(['created_at','updated_at']);
           
            return $this->sendResponse($success, 'liste des type d\'entretiens');

         }else{

            $this->sendError('Error','Aucun type d\'entretien définie');
         }
    }
}
