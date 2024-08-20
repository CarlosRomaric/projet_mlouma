<?php

namespace App\Http\Controllers\API\Auth;

use Carbon\Carbon;
use App\Models\User;
use Laravel\Passport\Token;
use App\Utilities\NewSmsAPI;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

use App\Http\Controllers\API\BaseController as BaseController;

class AuthController extends BaseController
{
    protected $messageSender;

    public function __construct(NewSmsAPI $messageSender)
    {
        
       
        $this->messageSender = $messageSender;
    }

    public function index(){

        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }else{
            $this->middleware('auth:api');
        }
        
        $user = Auth::user();
        //dd($user);
        $success['user'] = collect($user)->except(['created_at','updated_at']);
        return $this->sendResponse($success, 'utilisateur en connecté en ce moment.');
    }

    public function login(LoginRequest $request){
        
        $credentials = ['username' => $request->username, 'password' => $request->password];
       
        if(Auth::attempt($credentials)){ 
           
            $user = $request->user();
            if($user->isMobile()==true){
                $tokenResult =  $user->createToken('TraceAgri Personal Access Client');
                $success['access_token'] = $tokenResult->accessToken; 
                $success['token_type']='Bearer';
                $success['expires_at']=Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateString();
                $success['roles']='MOBILE';
                $success['user'] =  collect($user)->except(['created_at','updated_at']);
                
                return $this->sendResponse($success, 'Connexion effectuer avec success.');
            }else{
                return $this->sendError('Non autorisé.', ['error'=>'cet utilisateur n\'a pas les permissions pour se connecter au mobile'], 401);
            }
           
        }else{ 
          
            return $this->sendError('Non autorisé.', ['error'=>'le nom d\'utilisateur ou le mot de passe est incorrect']);
        } 
    
    }

    public function sendCodeUser(Request $request){
           
        try {
            $user = User::where('phone',$request->phone)->firstOrFail();
            $user->code = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
            $user->save();

            $message ='le code pour réinitialiser votre mot de passe est le suivant: '.$user->code;
        
            $this->messageSender->sendSMS([$user->phone], $message);

            $success['code']=$user->code;
            return $this->sendResponse($success,'le code a bien été enregistré');
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Aucun utilisateur avec ce numéro de téléphone n\'a été trouvé.'
            ], 404);
        }
       
        

    }

    public function checkCodeUser(Request $request){
        try {
            $user = User::where('code',$request->code)->firstOrFail();
            $user->code = NULL;
            $user->save();
            $success['user'] = $user;
             return $this->sendResponse($success,'le code est le bon');
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'le code que vous avez fourni n\'est pas le bon'
            ], 404);
        }
    }

    public function resetPassword(Request $request) {
        //dd($request->all());
       try {
         $user = User::find($request->userId);

         if($request->password == $request->passwordConfirm){

            $user->password = bcrypt($request->password);
            $user->save();
            $success='';
            return $this->sendResponse($success,'le mot de passe a bien été modifié');
         }else{
            return $this->sendError('le mot de passe n\'est pas conforme');
         }

        
       } catch (\Throwable $th) {
            return $this->sendError('l\'utilisateur n\existe pas');
       }
    }

    public function logout(Request $request)
    {
       
        
        if (!Auth::guard('api')->check()) {
            // Retourner une réponse avec un message d'erreur
            return response()->json(['error' => 'Non autorisé. Le token est invalide.'], 401);
        }else{
            $this->middleware('auth:api');


            $token = $request->user()->token();
            $token->revoke();
        
            $success ='';
            return $this->sendResponse($success, 'Vous êtes déconnecter avec success');
        }

        // try {
            // if (!Auth::guard('api')->check()) {
            //     // Retourner une réponse avec un message d'erreur
            //     return $this->sendError('Non autorisé',['error'=>'le token n\'est pas le bon']);
            // }else{
            //     //$this->middleware('auth:api');
            
            //     // Récupérer le jeton d'accès des en-têtes de la requête
            //     $token = $request->bearerToken();
                
            //     // Valider l'existence du jeton
            //     if (!$token) {
            //         return response()->json([
            //             'message' => 'Jeton invalide',
            //             'error' => 'Non autorisé'
            //         ], 401);
            //     }

            //     // Révoquer le jeton d'accès à l'aide de Passport
            //     //dd($request->user()->token());
            //     $tokenInstance = $request->user()->token();
            
            //     $tokenInstance->revoke();

            //     return response()->json([
            //         'message' => 'Déconnexion réussie', // Déconnexion réussie
            //     ], 200);
            // }
        // } catch (\Throwable $exception) {
        //     // Gérer les exceptions inattendues
        //     return response()->json([
        //         'message' => 'Une erreur est survenue lors de la déconnexion', // Une erreur est survenue lors de la déconnexion
        //         'error' => 'Erreur serveur interne'
        //     ], 500);
        // }
   
    }
    

}
