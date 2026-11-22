<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public $table = "newStudents";
    // public $hidden=[
    //     "id","updated_at"
    // ];

    // protected $visible = ["name","email"];

    protected $casts =["city"=>"boolean"] ;
}
