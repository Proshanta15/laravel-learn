<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List of students";
    }
    function add(){
        return "Student Added";
    }
    function delete(){
        return "Student Deleted";
    }
    function about($name){
        return $name;
    }
}
