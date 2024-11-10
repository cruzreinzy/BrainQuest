<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaitingController extends Controller
{
    public function connector(){
        return view('waiting');
    }
}
