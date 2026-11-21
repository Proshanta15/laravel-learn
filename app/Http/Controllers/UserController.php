<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index(){
        DB::connection()->getPdo();
        $users=DB::select("select * from users");
        return $users;
     
    }

    function save(){
        DB::connection()->getPdo();
        $users=DB::insert("insert into users (name, email, phone) values (?,?,?)",
        ["tony","tony@gmail.com",123456789]);
        if($users){
            return "New User added";
        }else{
            return "New user not added";
        }
    }

    function update(){
        DB::connection()->getPdo();
        $users=DB::insert("update users SET name = ?, email = ?, phone = ? where id = ? ",
        ["tonypro","tonypro@gmail.com",2589654, 3]);
        if($users){
            return " User Updated";
        }else{
            return " user not Updated";
        }
    }

    function delete(){
        DB::connection()->getPdo();
        $users=DB::insert("delete from users where id = ?",
        [3]);
        if($users){
            return " User deleted";
        }else{
            return " user not deleted";
        }
    }
}