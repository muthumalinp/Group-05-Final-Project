<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

}
