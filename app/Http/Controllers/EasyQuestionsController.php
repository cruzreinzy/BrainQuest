<?php

namespace App\Http\Controllers;

use App\Models\EasyQuestions;
use Illuminate\Http\Request;

class EasyQuestionsController extends Controller
{
    public function connector(){
        return view('easyquestions');
    }

    public function inpeasy(){
        return view('inputeasy');
    }


    public function addEasyQuestion(Request $request)
    {
        $questionInfo = $request->validate(
            [
                'easyquest' => 'required|min:5|string',
                'easyans' => 'required|min:5|string'
            ]
        );

        EasyQuestions::create(
            [
                'easyquestion' => $questionInfo['easyquest'],
                'easyanswer' => $questionInfo['easyans']
            ]
        );

        return redirect()->back();
    }
}
