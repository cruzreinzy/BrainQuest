<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function connector(){
        return view('adminhome');
    }

    public function closerer(){
        return view('closer');
    }
}

