<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateRoomController extends Controller
{
    public function connector(){
        return view('createroom');
    }
}
