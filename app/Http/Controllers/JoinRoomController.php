<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinRoomController extends Controller
{
    public function connector(){
        return view('joinroom');
    }
}
