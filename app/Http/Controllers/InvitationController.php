<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(){
        
        return view('invitations.index');
    }

    public function create(){

        return view('invitations.create');
    }
}
