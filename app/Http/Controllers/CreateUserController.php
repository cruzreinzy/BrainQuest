<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\CreateUser;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{
    public function connector(){
        return view('createuser');
    }

    public function addUser(Request $request)
    {
        $userInfo = $request->validate(
            [
                'playername' => 'required|min:4|string',
                'playerpass' => 'required|min:4|string'
            ]
        );

        Player::create(
            [
                'playername' => $userInfo['playername'],
                'playerpass' => $userInfo['playerpass']
            ]
        );

        return redirect()->back();
    }

    // public function deleteUser(Request $request)
    // {
    //     $userInfo = $request->only('id');

    //     CreateUser::find($userInfo['id'])->delete();

    //     return redirect()->back();
    // }

    public function deleteUser($id) {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return response()->json(['message' => 'DEleted Success'], 200);
        }

        return response()->json(['message' => 'User id not found'], 404);
    }

}
