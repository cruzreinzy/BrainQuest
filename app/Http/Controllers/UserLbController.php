<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLbController extends Controller
{
    public function connector(){
        return view('userlb');
    }
}
