<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestEmployeeLeave;
//use App\Helpers\EmployeeHelper;
//use Illuminate\Support\Facades\DB;
//use App\Models\EmployeeLeaveRequest;

class EmployeeLeaveController extends Controller
{
    /*public function employeeDetails(Request $request)
    {
        $compact = EmployeeHelper::getAllEmployeeLeaveDetails();
        return view('/project/employee/leaves', $compact);
    }

    public function requestLeave(Request $request)
    {
        try {
            DB::beginTransaction();
            $employeeLeaveRequestValidatedData = $request->validate([
                'contact_number' => 'required|regex:/^0\d{2}\s?\d{7}$/',
                'start_date' => 'required',
                'end_date' => 'required',
                'reason' => 'required',
            ]);
            $compact = EmployeeHelper::getAllDataRelatedEmployee();
            $employeeLeaveRequest = new EmployeeLeaveRequest($employeeLeaveRequestValidatedData);
            $employeeLeaveRequest->employee_id = $compact['employee']->id;
            $employeeLeaveRequest->employee_name = $compact['employee']->emp_fname." ".$compact['employee']->emp_lname;
            $employeeLeaveRequest->position = $compact['employee']->emp_jobtitle;
            $employeeLeaveRequest->save();

            DB::commit();

            return redirect()->route('employee.leave.request')->with('success', 'Leave request submitted successfully');

        }catch (ValidationException $e) {
            dd($e);
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            dd($e);
                DB::rollBack();
                return back()->with('error', 'Error updating user. Please try again.');
        }
    }
    */

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'leave_emp_name' => 'required|string|max:255',
            'leave_emp_position' => 'required|string|max:255',
            'leave_emp_phone' => 'required|string|max:255',
            'leave_start_date' => 'required|date|max:255',
            'leave_end_date' => 'required|date|max:255',
            'leave_reason' => 'required|string|max:255',
        ]);

        $employeeleave = new EmployeeLeave([
            'leave_emp_name' => $request->input('employee_name'),
            'leave_emp_position' => $request->input('position'),
            'leave_emp_phone' => $request->input('contact_number'),
            'leave_start_date' => $request->input('start_date'),
            'leave_end_date' => $request->input('end_date'),
            'leave_reason' => $request->input('reason'),
        ]);
        $employeeleave->save();

        try {
            RequestEmployeeLeave::create([
                'leave_emp_name' => $request->input('employee_name'),
                'leave_emp_position' => $request->input('position'),
                'leave_emp_phone' => $request->input('contact_number'),
                'leave_start_date' => $request->input('start_date'),
                'leave_end_date' => $request->input('end_date'),
                'leave_reason' => $request->input('reason'),
            ]);

            return redirect()->back()->with('flash_message', 'Leave request sent successfully!');
        } catch (\Exception $e) {
            // Log the exception
            \Log::error("Error storing leave request data: " . $e->getMessage());

            // Redirect or return a response with an error message
            return redirect()->back()->with('error', 'Error sending leave request. Please try again.');
        }
    }

}
