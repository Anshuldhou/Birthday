<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoveController;
use App\Http\Controllers\MessageController;

Route::get('/', [LoveController::class, 'index']);
Route::get('/letter', [LoveController::class, 'letter']);
Route::get('/quiz', [LoveController::class, 'showQuiz']);
Route::post('/quiz-check', [LoveController::class, 'checkQuiz']);
Route::post('/send-message', [MessageController::class, 'send']);

// Route::get('/', function () {
//     return view('welcome');
// });
