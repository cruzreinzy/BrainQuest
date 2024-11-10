<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateCodeController;
use App\Http\Controllers\CreateRoomController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\CustomCodeController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\EasyQuestionsController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameModeController;
use App\Http\Controllers\HardQuestionsController;
use App\Http\Controllers\JoinRoomController;
use App\Http\Controllers\LeaderboardsCOntroller;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LevelUserController;
use App\Http\Controllers\ManageQuestionsController;
use App\Http\Controllers\ManageQuestionsMode;
use App\Http\Controllers\MediumQuestionsController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserLbController;
use App\Http\Controllers\WaitingController;
use App\Models\ManageUser;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

Route::get('/adminhome',[AdminHomeController::class,'connector'])->middleware('auth')->name('adminhome');

Route::get('/closer',[AdminHomeController::class,'closerer'])->name('closer');

Route::get('/createroom',[CreateRoomController::class,'connector'])->middleware('auth')->name('createroom');

Route::get('/joinroom',[JoinRoomController::class,'connector'])->name('joinroom');

Route::get('/createcode',[CreateCodeController::class,'connector'])->middleware('auth')->name('createcode');

Route::get('/leaderboards',[LeaderboardsController::class,'connector'])->middleware('auth')->name('leaderboards');

Route::get('/userlb',[UserLbController::class,'connector'])->name('userlb');

Route::get('/custom',[CustomController::class,'connector'])->middleware('auth')->name('custom');

Route::get('/code',[CreateCodeController::class,'connector'])->name('code');

Route::get('/customcode',[CustomCodeController::class,'connector'])->middleware('auth')->name('customcode');

Route::get('/ccdirecteasy',[QuestionController::class,'checkQnulleasy'])->name('ccdirecteasy');

Route::get('/userhome',[UserHomeController::class,'connector'])->name('userhome');

Route::get('/game',[GameController::class,'connector'])->name('game');

Route::get('/start',[StartController::class,'connector'])->name('start');

Route::get('/level',[LevelController::class,'connector'])->name('level');

Route::get('/leveluser',[LevelUserController::class,'connector'])->name('leveluser');

Route::get('/waiting',[WaitingController::class,'connector'])->name('waiting');

Route::post('/custom', [QuestionController::class, 'addQuestion'])->name('question_adding');

Route::post('/game', [QuestionController::class, 'checkEasyAnswer'])->name('answer_checking');

Route::post('/customcode', [CreateCodeController::class, 'addCode'])->name('code_adding');

Route::get('/adminlogin', [AuthController::class, 'viewLogin'])->name('login');

Route::post('/adminlogin', [AuthController::class, 'login'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('unauthenticate');

Route::get('/createuser',[CreateUserController::class,'connector'])->middleware('auth')->name('createuser');

Route::post('/createuser', [CreateUserController::class, 'addUser'])->name('user_adding');

Route::get('/managequestions',[ManageQuestionsController::class,'connector'])->middleware('auth')->name('managequestions');

Route::get('/userlogin', [AuthController::class, 'viewUserLogin'])->name('userlogin');

Route::post('/userlogin', [AuthController::class, 'userlogin'])->name('userauthenticate');

// Route::get('/manageuser', [CreateUserController::class, 'deleteUser'])->name('user_delete');

Route::post('/deleteuser/{id}', [CreateUserController::class, 'deleteUser'])->name('user.delete');

Route::get('/gamemode',[GameModeController::class,'connector'])->name('gamemode');

Route::get('/easyquestions',[EasyQuestionsController::class,'connector'])->name('easyquestions');

Route::post('/easyquestions', [EasyQuestionsController::class, 'addEasyQuestion'])->name('easyquestion_adding');

Route::get('/mediumquestions',[MediumQuestionsController::class,'connector'])->name('mediumquestions');

Route::post('/mediumquestions', [MediumQuestionsController::class, 'addMediumQuestion'])->name('mediumquestion_adding');

Route::get('/hardquestions',[HardQuestionsController::class,'connector'])->name('hardquestions');

Route::post('/hardquestions', [HardQuestionsController::class, 'addHardQuestion'])->name('hardquestion_adding');

Route::get('/managequestionsmode',[ManageQuestionsController::class,'mqm'])->name('managequestionsmode');

Route::get('/inputeasy',[EasyQuestionsController::class,'inpeasy'])->name('inputeasy');
Route::get('/inputmedium',[MediumQuestionsController::class,'inpmedium'])->name('inputmedium');
Route::get('/inputhard',[HardQuestionsController::class,'inphard'])->name('inputhard');