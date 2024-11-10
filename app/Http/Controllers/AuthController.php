<?php

namespace App\Http\Controllers;

// use App\Models\User;

use App\Models\Auth as ModelsAuth;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/adminhome');
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid username or password'])->withInput();
        }
    }

    public function viewLogin()
    {
        return view('adminlogin');
    }

    public function userlogin(Request $request)
    {

        $credential = $request->only('playername', 'playerpass');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect('/userhome');
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid username or password'])->withInput();
        }
    }

    public function viewUserLogin()
    {
        return view('userlogin');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/adminlogin');
    }


}
