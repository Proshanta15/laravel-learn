<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});

Route::get('/add-user', function(){
    return view('add-user');
});

Route::post("/add-user", [UserController::class,'addUser']);