<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeculationController extends Controller
{
    public function index()
    {
        return view('speculation.index');
    }
}
