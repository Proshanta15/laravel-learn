<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ImageController;



Route::get('/',function(){
    return view('welcome');
});

Route::get('add-employee',function(){
    return view('add-employee');
});

Route::post('add-employee', [EmployeeController::class,'add']);

Route::get('show-employee',[EmployeeController::class,'show']);

Route::get('delete-employee/{id}', [EmployeeController::class,'delete']);
Route::get('update-employee/{id}', [EmployeeController::class,'update']);
Route::post('update-employee/{id}', [EmployeeController::class,'updateDB']);
Route::get('search-employee', [EmployeeController::class,'search']);

Route::get('upload', function(){
    return view('upload');
});

Route::post('upload',[ImageController::class,'upload']);
Route::get('display',[ImageController::class,'list']);