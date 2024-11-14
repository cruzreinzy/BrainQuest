<?php

namespace App\Http\Controllers;

use App\Models\CreateCode;
use App\Models\CustomCode;
use Illuminate\Http\Request;

class JoinRoomController extends Controller
{
    public function connector(){
        return view('joinroom');
    }

    public function checkRoomCode(Request $request)
    {
        $roomcode = $request->only('quest');

        $checkcode = CreateCode::find($roomcode['quest']);

        if ($roomcode['easyanswer'] == $checkcode->easyanswer){
            return response()->json('correct answer', 200);
        } else {
            return response()->json(['message' => 'wrong answer'], 400);
        }
    }
}
