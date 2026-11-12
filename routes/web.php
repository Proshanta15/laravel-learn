<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


Route::get('/', function(){
    return view('welcome');
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

Route::get('/upload', function(){
    return view('upload');
});

Route::post('/upload', [UploadController::class, 'upload']);




Route::prefix('student')->group(function(){
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});



Route::controller(StudentController::class)->group(function(){
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('delete','delete');
    Route::get('about/{name}', 'about');
});