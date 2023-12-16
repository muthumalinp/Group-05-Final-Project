<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestEmployeeLeave;
use App\Models\Employee;
use App\Models\EmployeeDetails;
use App\Models\EmployeeLeave;
use App\Models\EmployeeLeaveRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use App\Helpers\EmployeeHelper;
//use Illuminate\Support\Facades\DB;
//use App\Models\EmployeeLeaveRequest;

class EmployeeLeaveController extends Controller
{
     private function getEmployeeData(){
        $user = User::find(Auth::id());
        $employee = Employee::where('emp_email', $user->email)->first();
        $employee_leave = EmployeeLeave::where('employee_id', $employee->id)->first();
        $employee_details = EmployeeDetails::where('user_id', $user->id)->first();
        return compact(
            'user',
            'employee',
            'employee_leave',
            'employee_details'
        );
    }
    public function employeeDetails(Request $request)
    {
        $compact = $this->getEmployeeData();
        return view('/project/employee/leaves',$compact);
    }

    public function requestLeave(Request $request)
    {
        try {
            $compact = $this->getEmployeeData();
            $data = [
                'user_id' => $compact['user']->id,
                'leave_emp_name' => $request->input('leave_emp_name'),
                'leave_emp_position' => $request->input('leave_emp_position'),
                'leave_emp_email' => $compact['user']->email,
                'leave_start_date' => $request->input('leave_start_date'),
                'leave_end_date' => $request->input('leave_end_date'),
                'leave_reason' => $request->input('leave_reason'),
                'leave_status' => 'pending',
            ];

            $requestLeave = new RequestEmployeeLeave($data);
            $requestLeave->save();

            return redirect()->back()->with('flash_message', 'Leave request sent successfully!');
        } catch (\Exception $e) {
            // Log the exception
            \Log::error("Error storing leave request data: " . $e->getMessage());
            return redirect()->back()->with('error', 'Error sending leave request. Please try again.');
        }
    }

}
