<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardsController extends Controller
{
    public function connector(){
        return view('leaderboards');
    }
}
