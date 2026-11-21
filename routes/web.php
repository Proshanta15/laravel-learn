<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class, 'index']);
Route::get('/save',[UserController::class, 'save']);
Route::get('/update',[UserController::class, 'update']);
Route::get('/delete',[UserController::class, 'delete']);