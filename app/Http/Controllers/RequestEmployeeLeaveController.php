<?php

namespace App\Http\Controllers;

use App\Models\RequestEmployeeLeave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RequestEmployeeLeaveController extends Controller
{
    public function submitLeaveRequest(Request $request)
    {
        // Validate the form data
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required|string',
        ]);

        // Create a new leave request
        /*RequestEmployeeLeave::create([
            'leave_emp_name' => auth()->user()->emp_fname . ' ' . auth()->user()->emp_lname,
            'leave_emp_position' => auth()->user()->emp_jobtitle,
            'leave_emp_phone' => $request->input('contact_number'),
            'leave_start_date' => $request->input('start_date'),
            'leave_end_date' => $request->input('end_date'),
            'leave_reason' => $request->input('reason'),
            'leave_status' => 'pending', // You can set the default status
        ]);*/

        RequestEmployeeLeave::create([
            'leave_emp_name' => $request->input('employee_name'),
            'leave_emp_position' => $request->input('position'),
            'leave_emp_phone' => $request->input('contact_number'),
            'leave_start_date' => $request->input('start_date'),
            'leave_end_date' => $request->input('end_date'),
            'leave_reason' => $request->input('reason'),
            'leave_status' => 'pending', // You can set the default status
        ]);

        // Optionally, you can redirect the user or return a response
        return redirect()->back()->with('success', 'Leave request submitted successfully');

        Log::info('Leave request created:', ['leave_request' => $leaveRequest]);
    }

    public function index()
    {
        // Retrieve all leave requests from the database
        $leaveRequests = RequestEmployeeLeave::all();

        // Pass the leave requests to the view
        return View::make('project.owner.leave-requests.index', ['leaveRequests' => $leaveRequests]);

    }

    public function acceptLeave($id)
    {
        // Find the leave request by ID
        $leaveRequest = RequestEmployeeLeave::findOrFail($id);

        // Update the leave status to "accepted"
        $leaveRequest->update(['leave_status' => 'accepted']);

        // Optionally, you can redirect the user or return a response
        return redirect()->back()->with('success', 'Leave request accepted successfully');
    }

    public function rejectLeave($id)
    {
        $leaveRequest = RequestEmployeeLeave::find($id);

        if (!$leaveRequest) {
            // Handle case where leave request is not found
            return redirect()->back()->with('error', 'Leave request not found.');
        }

        $leaveRequest->update(['leave_status' => 'rejected']);

        return redirect()->back()->with('success', 'Leave request rejected successfully.');
    }

}
