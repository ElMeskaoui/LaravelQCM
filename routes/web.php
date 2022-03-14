<?php

use App\Http\Controllers\ReponseController;
use App\Http\Controllers\FormulerController;
use App\Http\Controllers\QuestionController;
use App\Models\Reponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FormulerController::class,'index'])->name('Welcome');
Route::get('/{id}',[QuestionController::class,'index'])->name('question');
Route::post('/reponse',[ReponseController::class,'index'])->name('reponse');