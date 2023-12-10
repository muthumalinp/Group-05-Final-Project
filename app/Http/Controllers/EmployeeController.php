<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeLeave;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\EmployeeRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(){
        $this->employee = new Employee();
        
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

        EmployeeLeave::create([
            'employee_id' => $employee->id,
            'available_leaves' => 0,
            'used_leaves' => 0,
            'remaining_leaves' => 0,
        ]);

        $user = User::create([
            'fname' => $request->input('emp_fname'),
            'lname' => $request->input('emp_lname'),
            'email' => $request->input('emp_email'),
            'phone_number' => $request->input('emp_phone'),
            'password' => bcrypt($request->input('emp_password')), // Set a default password or use the employee's password
            'role' => 'employee', // Adjust the role accordingly
        ]);

        // Send email notification
        $employeeData = [
            'emp_fname' => $employee->emp_fname,
            'emp_email' => $employee->emp_email,
        ];

        
            Mail::to($request->input('emp_email'))->send(new EmployeeRegistered($employeeData));
        
            // Redirect or return a response
            return redirect()->route('employee.index')->with('success', 'Employee registered successfully!');
    
            // Log the exception
            Log::error("Error sending email: " . $e->getMessage());
        
            // Redirect or return a response with an error message
            return redirect('/employees')->with('success', 'Employee registered successfully!');

       
        

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
            'emp_fname' => 'required|string|max:255',
            'emp_email' => 'required|string|unique:employees,email',
            'emp_password' => 'required|string|min:6|confirmed',
        ]);

        $employee = Employee::create([
            'emp_name' => $request->input('name'),
            'emp_email' => $request->input('email'),
            'emp_password' => Hash::make($request->input('password')),
        ]);

        // Send the email
        $employeeData = ['name' => $employee->fname, 'email' => $employee->email];
        Mail::to($employee->email)->send(new EmployeeRegistered($employeeData));

        // return a response...
        return response()->json(['message' => 'Employee registered successfully'], 201);
    }


    public function leaveRequests($id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            // Handle the case where the employee is not found, e.g., redirect or show an error
            return redirect()->route('some.error.route');
        }

        $leaveRequests = $employee->leaveRequests;

        return view('employee.leave-requests', ['employee' => $employee, 'leaveRequests' => $leaveRequests]);
    }

    
}
