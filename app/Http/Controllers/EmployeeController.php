<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

use App\Mail\EmployeeRegistered;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(Employee $employee){
        $this->employee = $employee;
        
    }
    public function index()
    {
        $response['employees'] = $this->employee->all();
        return view('project.owner.Employee.index')->with($response);

    }
    
    public function store(Request $request)
    {
      
        $this->employee->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['employee'] = $this->employee->find($id);
        return view('project.owner.Employee.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);
        $employee->update(array_merge($employee->toArray(), $request->toArray()));
        return redirect('employee');
    }
    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('employee');
    }

//employee registration.........
    public function registerEmployee(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:employees,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $employee = Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Send the email
        $employeeData = ['name' => $employee->fname, 'email' => $employee->email];
        Mail::to($employee->email)->send(new EmployeeRegistered($employeeData));

        // return a response...
        return response()->json(['message' => 'Employee registered successfully'], 201);
    }

}
