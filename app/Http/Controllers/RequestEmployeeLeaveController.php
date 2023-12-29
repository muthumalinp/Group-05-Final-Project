<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\mailtoEmployee;
use Illuminate\Http\Request;
use App\Mail\LeaveRequestStatus;
use App\Models\RequestEmployeeLeave;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

        // Convert start and end dates to Carbon instances
        $startDate = Carbon::parse($request->input('start_date'));
        $endDate = Carbon::parse($request->input('end_date'));
        
        // Calculate the number of days
        $numberOfDays = $endDate->diffInDays($startDate);

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
            'user_id' => Auth::id(),
            'leave_emp_name' => $request->input('employee_name'),
            'leave_emp_position' => $request->input('position'),
            'leave_emp_email' => $request->input('email'),
            'leave_start_date' => $request->input('start_date'),
            'leave_end_date' => $request->input('end_date'),
            'leave_reason' => $request->input('reason'),
            'leave_status' => 'pending',
            'number_of_days' => $numberOfDays, 
        ]);

        // Optionally, you can redirect the user or return a response
        return redirect()->back()->with('success', 'Leave request submitted successfully');

        Log::info('Leave request created:', ['leave_request' => $leaveRequest]);
    }

    public function index()
    {
        // Retrieve all leave requests from the database
        $leaveRequests = RequestEmployeeLeave::all();
        // Retrieve all leave requests with associated user data
        //$leaveRequests = RequestEmployeeLeave::with('user')->get();

        // Pass the leave requests to the view
        return View::make('project.owner.leave-requests.index', ['leaveRequests' => $leaveRequests]);

    }

    public function acceptLeave($id)
    {
        // Find the leave request by ID
        $leaveRequest = RequestEmployeeLeave::findOrFail($id);
    
        // Update the leave status to "accepted"
        $leaveRequest->update(['leave_status' => 'accepted']);

        // Calculate the number of leave dates
        $startDate = Carbon::parse($leaveRequest->leave_start_date);
        $endDate = Carbon::parse($leaveRequest->leave_end_date);
        $numberOfDays = $endDate->diffInDays($startDate);

        // Update the number_of_days column
        $leaveRequest->update(['number_of_days' => $numberOfDays]);

        Mail::to($leaveRequest->leave_emp_email)->send(new mailtoEmployee($leaveRequest));

        // Send email with the request status
        // $user = User::find($leaveRequest->user_id);
    
        // // Check if the user exists
        // if ($user) {
        //     \Mail::to($user->email)->send(new LeaveRequestStatus('accepted'));
             return redirect()->back()->with('success', 'Leave request accepted.');
        // } else {
        //     return redirect()->back()->with('error', 'User not found for the leave request.');
        // }
    }
    
    public function rejectLeave($id)
    {
        $leaveRequest = RequestEmployeeLeave::find($id);
    
        if (!$leaveRequest) {
            return redirect()->back()->with('error', 'Leave request not found.');
        }
    
        $leaveRequest->update(['leave_status' => 'rejected']);
    
        // Check if the user exists
        // if ($leaveRequest->user) {
        //     \Mail::to($leaveRequest->user->email)->send(new LeaveRequestStatus('rejected'));
        return redirect()->back()->with('success', 'Leave request rejected.');
        // } else {
        //     return redirect()->back()->with('error', 'User not found for the leave request.');
        // }
    }
}
