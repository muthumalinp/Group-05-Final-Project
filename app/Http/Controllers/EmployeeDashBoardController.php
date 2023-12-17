<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\EmployeeDetails;
use App\Models\EmployeeLeave;
use App\Models\EmployeeLeaveRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\BookedAppointment;

class EmployeeDashBoardController extends Controller
{
    public function __invoke()
    {
        $user = User::find(Auth::id());
        $employee = Employee::where('emp_email', $user->email)->first();
        $employee_leave = EmployeeLeave::where('employee_id', $employee->id)->first();
        $employee_details = EmployeeDetails::where('user_id', $user->id)->first();
        $bookedAppointments = BookedAppointment::where('emp_id', $employee->id)
            ->where('bookingDate', '>=', now()->toDateString())
            ->where(function ($query) {
                    $query->where('bookingDate', '>', now()->toDateString())
                        ->orWhere(function ($query) {
                            $query->where('bookingDate', '=', now()->toDateString())
                                ->where('endTimeResult', '>', now()->toTimeString());
                        });
                })
                ->get();
        return view('/project/employee/dashboard',compact(
            'user',
            'employee',
            'bookedAppointments'
        ));
    }
}
