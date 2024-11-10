<?php

namespace App\Http\Controllers;

use App\Models\CreateCode;
use Illuminate\Http\Request;

class CreateCodeController extends Controller
{
    public function addCode(Request $request)
    {
        $codeInfo = $request->validate(
            [
                'roomcode' => 'required|min:4|string',
            ]
        );

        CreateCode::create(
            [
                'roomcodedb' => $codeInfo['roomcode'],
            ]
        );

        return redirect()->route('start');
    }
}
