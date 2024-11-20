<?php

namespace App\Http\Controllers;

use App\Models\CreateCode;
use App\Models\CustomCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinRoomController extends Controller
{
    public function connector(){
        if (!Auth::check()) {
            return view('userlogin');
        }else{
            return view('joinroom');
        }
    }

    public function checkRoomCode(Request $request)
    {
        $roomcodedb = $request->only('roomcodedb');

        $checkcode = CreateCode::where('roomcodedb', $roomcodedb['roomcodedb'])->first();

        if ($roomcodedb['roomcodedb'] == $checkcode->roomcodedb){
            return redirect('/game');
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid Code'])->withInput();
        }
    }
}
