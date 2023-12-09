<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RequestEmployeeLeave;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RequestEmployeeLeaveController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'leave_emp_name' => 'required|string|max:255',
        'leave_emp_position' => 'required|string|max:255',
        'leave_emp_email' => 'required|string|max:255',
        'leave_emp_phone' => 'required|string|max:255',
        'leave_days' => 'required|string|max:255',
        'leave_reason' => 'required|string|max:255',
    ]);

    RequestEmployeeLeave::create([
        'leave_emp_name' => $request->input('leave_emp_name'),
        'leave_emp_position' => $request->input('leave_emp_position'),
        'leave_emp_email' => $request->input('leave_emp_email'),
        'leave_emp_phone' => $request->input('leave_emp_phone'),
        'leave_days' => $request->input('leave_days'),
        'leave_reason' => $request->input('leave_reason'),
    ]);


    return redirect()->back()->with('flash_message', 'Send Request Successfully!');
}
}
