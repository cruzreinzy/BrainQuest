<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function connector(){

        if (!Auth::check()) {
            return view('userlogin');
        }else{
            return view('userhome');
        }
        
    }
}
