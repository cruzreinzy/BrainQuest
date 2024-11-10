<?php

namespace App\Http\Controllers;

use App\Models\HardQuestions;
use Illuminate\Http\Request;

class HardQuestionsController extends Controller
{
    public function connector(){
        return view('hardquestions');
    }

    public function inphard(){
        return view('inputhard');
    }

    public function addHardQuestion(Request $request)
    {
        $questionInfo = $request->validate(
            [
                'hardquest' => 'required|min:5|string',
                'hardans' => 'required|min:5|string'
            ]
        );

        HardQuestions::create(
            [
                'hardquestion' => $questionInfo['hardquest'],
                'hardanswer' => $questionInfo['hardans']
            ]
        );

        return redirect()->back();
    }
}
