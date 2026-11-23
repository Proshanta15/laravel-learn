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

Route::get('login',function(){
    return view('login');
});

Route::post('login',[UserController::class,'login']);

Route::get('profile', function(){
    return view('profile');
});

Route::get('logout',[UserController::class,'logout']);