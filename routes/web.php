<?php

use App\Http\Controllers\QuizController;
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

Route::get('/', [QuizController::class, 'welcome']);
Route::get('/quiz/{step?}', [QuizController::class, 'showQuiz']);
Route::post('/quiz/{step?}', [QuizController::class, 'postQuiz']);
Route::get('/result/{slug}', [QuizController::class, 'resultQuiz']);
