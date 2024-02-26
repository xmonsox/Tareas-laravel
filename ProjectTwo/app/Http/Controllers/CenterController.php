<?php

namespace App\Http\Controllers;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function center(){
        $centers = Center::all();
        return view('centroV', compact('centers'));
    }
}
