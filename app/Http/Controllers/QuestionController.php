<?php

namespace App\Http\Controllers;

use App\Models\EasyQuestions;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    public function checkQnulleasy(){

        $nullcheck = !DB::table('easy_questions')->exists();

        if ($nullcheck){
            return redirect()->back();
        } else {
            return redirect()->route('customcode');
        }
    }

    public function addQuestion(Request $request)
    {
        $questionInfo = $request->validate(
            [                                     
                'quest' => 'required|min:5|string',
                'ans' => 'required|min:5|string'
            ]
        );

        Question::create(
            [
                'question' => $questionInfo['quest'],
                'answer' => $questionInfo['ans']
            ]
        );

        return redirect()->back();
    }

    public function checkEasyAnswer(Request $request):JsonResponse
    {
        $credentials = $request->only('easyanswer', 'question_id');

        $easyquestion = EasyQuestions::find($credentials['question_id']);

        $data = ['message' => 'Success'];

        if ($credentials['easyanswer'] == $easyquestion->easyanswer){
            return response()->json('correct answer', 200);
        } else {
            return response()->json(['message' => 'wrong answer'], 400);
        }
    }

    

}
