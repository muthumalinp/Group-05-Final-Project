<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        // Validate the request
        $request->validate([
        'emp_fname' => ['required', 'string', 'max:255'],
        'emp_lname' => ['required', 'string', 'max:255'],
        'emp_jobtitle' => ['required', 'string', 'max:255'],
        'emp_phone' => ['required', 'string', 'max:255'],
        'emp_email' => ['required', 'string', 'email', 'max:255'],
        'emp_bsalary' => ['required', 'string', 'max:225'],
        'emp_rewards' => ['required', 'string', 'max:225'],
        
        ]);

        // Save the employee data
        $employee = new Employee([
            'emp_fname' => $request->input('emp_fname'),
            'emp_lname' => $request->input('emp_lname'),
            'emp_jobtitle' => $request->input('emp_jobtitle'),
            'emp_phone' => $request->input('emp_phone'),
            'emp_email' => $request->input('emp_email'),
            'emp_bsalary' => $request->input('emp_bsalary'),
            'emp_rewards' => $request->input('emp_rewards'),
        ]);
        $employee->save();

        // Send email notification
        $employeeData = [
            'emp_fname' => $employee->emp_fname,
            'emp_email' => $employee->emp_email,
        ];

        try {
            Mail::to($request->input('emp_email'))->send(new EmployeeRegistered($employeeData));
        
            // Redirect or return a response
            return redirect()->route('employee.index')->with('success', 'Employee registered successfully!');
        } catch (\Exception $e) {
            // Log the exception
            Log::error("Error sending email: " . $e->getMessage());
        
            // Redirect or return a response with an error message
            return redirect('/employees')->with('success', 'Employee registered successfully!');

        }
        

        //Mail::to('saloonGP05@gmail.com')->send(new EmployeeRegistered($employeeData));

        // Redirect or return a response
        //return redirect()->route('employee.index')->with('success', 'Employee registered successfully!');
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
