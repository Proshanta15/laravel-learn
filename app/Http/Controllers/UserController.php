<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){

        $request->validate([
            "username"=>"required | min:3 | max:20",
            "email"=>"required"
        ]);

          return $request;
    //    $username = $request->input('username');
    //    $email = $request->input('email');
    //    $phone = $request->input('phone');

    //    return "Name: " . $username .
    //            "<br>Email: " . $email .
    //            "<br>Phone: " . $phone;
    }
}