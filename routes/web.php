<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'category']);
Route::get('/category/1', [UniversityController::class, 'university']);
Route::get('/university/1', [QuestionController::class, 'question']);
Route::get('/question/1', [AnswerController::class, 'answer']);
