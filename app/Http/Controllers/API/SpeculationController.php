<?php

namespace App\Http\Controllers\API;

use App\Models\Speculation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;

class SpeculationController extends BaseController
{
    public function __construct(){
        $this->middleware("auth:api");
    }

    public function index(){

        $speculations = Speculation::orderBy('created_at','DESC')
                        ->with('semences')
                        ->get();
                        
        $success['speculations']=$speculations;

        return $this->sendResponse($success, 'liste des speculations');
        
    }


}
