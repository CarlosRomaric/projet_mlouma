<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        //dd('test');
        return view('projets.index');
    }
    
}
