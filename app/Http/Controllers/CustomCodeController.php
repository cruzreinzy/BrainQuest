<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomCodeController extends Controller
{
    public function connector(){
        return view('customcode');
    }
}
