<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index' , ['employees' => $employees]);
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required|max:200',
            'salary' => 'required|numeric|min:0'
        ]);
        Employee::create($data);
        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee){
     return view ('employee.edit' , ['employee'=>$employee]);
    }
}


