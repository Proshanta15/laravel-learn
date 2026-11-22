<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function get(Request $req){
        return $req;
    }

    function post(){
        return "Post method";
    }

    function put(){
        return "Put method";
    }

    function delete(){
        return "Delete method ";
    }
}