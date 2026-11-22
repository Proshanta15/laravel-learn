<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/user',[UserController::class, 'get']);
Route::post('/user',[UserController::class, 'post']);
Route::put('/user',[UserController::class, 'put']);
Route::delete('/user',[UserController::class, 'delete']);
Route::view('form','user');
// Route::get('/save',[UserController::class, 'save']);
// Route::get('/update',[UserController::class, 'update']);
// Route::get('/delete',[UserController::class, 'delete']);

Route::get('/',[StudentController::class,'index']);