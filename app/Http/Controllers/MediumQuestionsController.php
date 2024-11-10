<?php

namespace App\Http\Controllers;

use App\Models\MediumQuestions;
use Illuminate\Http\Request;

class MediumQuestionsController extends Controller
{
    public function connector(){
        return view('mediumquestions');
    }

    public function inpmedium(){
        return view('inputmedium');
    }

    public function addMediumQuestion(Request $request)
    {
        $questionInfo = $request->validate(
            [
                'mediumquest' => 'required|min:5|string',
                'mediumans' => 'required|min:5|string'
            ]
        );

        MediumQuestions::create(
            [
                'mediumquestion' => $questionInfo['mediumquest'],
                'mediumanswer' => $questionInfo['mediumans']
            ]
        );

        return redirect()->back();
    }
}
