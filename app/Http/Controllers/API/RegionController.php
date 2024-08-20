<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use App\Models\Region;

class RegionController extends BaseController
{
       /**
     * FarmerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $regions = Region::orderBy('created_at','DESC')
                    ->with('departements')
                    ->get();
        $success['regions']=$regions;
        return $this->sendResponse($success, 'liste des regions');
    }
}
