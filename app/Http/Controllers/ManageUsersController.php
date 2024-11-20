<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    public function connector(){
        return view('manageusers');
    }

    public function addUser(Request $request)
    {
        $userInfo = $request->validate(
            [
                'username' => 'required|min:5|string',
                'password' => 'required|min:5|string'
            ]
        );

        User::create(
            [
                'username' => $userInfo['username'],
                'password' => $userInfo['password']
            ]
        );

        return redirect()->back();
    }

}
