<?php

namespace App\Http\Controllers;

use App\Models\Speculation;
use Illuminate\Http\Request;

class SemenceController extends Controller
{
    public function index($speculation_id)
    {
        $speculation = Speculation::find($speculation_id);
        return view('semences.index', compact('speculation'));
    }
}
