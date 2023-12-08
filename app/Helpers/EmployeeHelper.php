<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use App\Models\Employee;
use App\Models\EmployeeEmergencyContact;
use App\Models\EmployeePersonalInformation;
use App\Models\EmployeeLeave;
use App\Models\EmployeeLeaveRequest;
use App\Models\User;

class EmployeeHelper
{
    public static function getAllDataRelatedEmployee()
    {
        $id = session('user_id');
        $user = User::find($id);
        $employee = Employee::where('user_id', $id)->first();
        $employee_leave = EmployeeLeave::where('employee_id', $employee->id)->first();
        $personal_information = EmployeePersonalInformation::where('user_id', $id)->first();
        $emergency_contact = EmployeeEmergencyContact::where('user_id', $id)->first();
        return compact(
            'user',
            'employee',
            'personal_information',
            'emergency_contact',
            'employee_leave'
        );
    }

    public static function getAllEmployeeLeaveDetails()
    {
        $id = session('user_id');
        $employee = Employee::where('user_id', $id)->first();
        $employee_leave = EmployeeLeave::where('employee_id', $employee->id)->first();
        $employee_leave_request = EmployeeLeaveRequest::where('employee_id', $employee->id)->first();
        return compact(
            'employee',
            'employee_leave',
            'employee_leave_request'
        );
    }

    public static function updateProfileImage($request, $id)
    {
        $employee = Employee::where('user_id', $id)->firstOrFail();
        if (!$employee) {
            abort(404);
        }
        if (!$request->currentProfileImage) {
            $profileImage = $request->file('profileImage');
            if ($profileImage) {
                $imageName = date('YmdHi') . $profileImage->getClientOriginalName();
                $profileImage->move(public_path('employee_assets/uploads'), $imageName);

                if ($employee->profile_image) {
                    File::delete(public_path('employee_assets/uploads/' . $employee->profile_image));
                }

                $employee->profile_image = $imageName;
            } else {
                if ($employee->profile_image) {
                    File::delete(public_path('employee_assets/uploads/' . $employee->profile_image));
                }

                $employee->profile_image = null;
            }
        } elseif ($request->hasFile('profileImage') && $request->currentProfileImage) {
            $profileImage = $request->file('profileImage');
            $imageName = date('YmdHi') . $profileImage->getClientOriginalName();
            $profileImage->move(public_path('employee_assets/uploads'), $imageName);

            if ($employee->profile_image) {
                File::delete(public_path('employee_assets/uploads/' . $employee->profile_image));
            }

            $employee->profile_image = $imageName;
        }

        $employee->save();
    }

}
