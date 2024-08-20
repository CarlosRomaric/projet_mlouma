<?php

namespace App\Http\Controllers\API;

use App\Models\Agribusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;

class AgribusinessController extends BaseController
{
    public function __contruct(){
        $this->middleware("auth:api");
    }

    public function index()
    {
        $agribusinesses = Agribusiness::orderBy('created_at','DESC')->get();
        $success['agribusinesses']=$agribusinesses;

        return $this->sendResponse($success, 'liste des coopératives');
    }


}
