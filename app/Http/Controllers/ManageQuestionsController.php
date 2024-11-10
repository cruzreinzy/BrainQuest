<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageQuestionsController extends Controller
{
    public function connector(){
        return view('managequestions');
    }

    public function mqm(){
        return view('managequestionsmode');
    }
}
