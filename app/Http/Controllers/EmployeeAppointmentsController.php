<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\BookedAppointment;
use Illuminate\Support\Facades\Auth;

class EmployeeAppointmentsController extends Controller
{
    public function getEmployeeAppointmentsDetails()
    {
        $user = User::find(Auth::id());
        $employee = Employee::where('emp_email', $user->email)->first();
        $bookedAppointments = BookedAppointment::where('emp_id', $employee->id)
            ->where('booking_date', '>=', now()->format('Y-m-d'))
            ->where(function ($query) {
                $query->where('booking_date', '>', now()->format('Y-m-d'))
                    ->orWhere(function ($query) {
                        $query->where('booking_date', '=', now()->format('Y-m-d'))
                            ->where('end_time', '>', now()->format('H:i:s'));
                    });
            })
            ->get();

        return view('/project/employee/appointments',compact(
            'bookedAppointments'
        ));
    }
}
