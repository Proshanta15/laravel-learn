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
        $data = Employee::paginate(10);
        return view('show-employees', ["employees" => $data]);
    }

    function delete($id)
    {
        Employee::find($id)->delete();
        return redirect('show-employee');
    }

    function update($id)
    {
        $data = Employee::find($id);
        return view('update-employee', ["emp" => $data]);
    }

    function updateDB(Request $req, $id)
    {
        Employee::find($id)->update([
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
        ]);
        return redirect('show-employee');
    }

    function search(Request $req)
    {
        $keyword = $req->query('search-name');
        $data = Employee::where('name', 'like', "%{$keyword}%")->get();
        return view('show-employees', ["employees" => $data]);
    }
}
