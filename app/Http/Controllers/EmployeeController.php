<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function add(Request $req)
    {
        // $employee = new Employee();
        // $employee->name=$req->name;
        // $employee->email=$req->email;
        // $employee->phone=$req->phone;

        // if($employee->save()){
        //     return "Data Stored";
        // }else{
        //     return "Data Not Stored";
        // }

        // $employee= Employee::create([
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'phone'=>$req->phone
        // ]);

        Employee::create($req->all());
        return redirect('show-employee');
    }

    function show()
    {
        $data = Employee::all();
        return view('show-employees', ["employees" => $data]);
    }
}