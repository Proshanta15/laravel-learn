<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



Route::get('/',function(){
    return view('welcome');
});

Route::get('add-employee',function(){
    return view('add-employee');
});

Route::post('add-employee', [EmployeeController::class,'add']);

Route::get('show-employee',[EmployeeController::class,'show']);