<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeEmergencyContact;
use App\Models\EmployeePersonalInformation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $id = session('user_id');
        $user = User::find($id);
        $employee = Employee::where('user_id', $id)->first();
        $personal_information = EmployeePersonalInformation::where('user_id', $id)->first();
        $emergency_contact = EmployeeEmergencyContact::where('user_id', $id)->first();
        return view('/project/employee/profile', compact(
            'user',
            'employee',
            'personal_information',
            'emergency_contact'
        ));
    }

    public function updateProfile(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $userValidatedData = $request->validate([
                'fname' => 'required|max:50',
                'lname' => 'required|max:50',
                'password' => 'nullable|min:6',
                'old_password' => 'nullable|min:6',
                'confirm_password' => 'same:password',
                'phone_number' => 'required',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users', 'email')->ignore($id),
                ],
            ]);
            $personalInfoValidatedData = $request->validate([
                'birth_date' => 'required',
                'passport_no' => 'required',
                'address' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
                'marital_status' => 'required',
            ]);

            $user = User::find($id)->first();
            if (!$user) {
                abort(404);
            }
            if ($request->filled('password')) {
                if($user->password == bcrypt($userValidatedData['old_password'])){
                    $userValidatedData['password'] = bcrypt($userValidatedData['password']);
                }
            } else {
                unset($userValidatedData['password']);
            }

            $user->update($userValidatedData);

            $personal_info = EmployeePersonalInformation::where('user_id', $id)->first();
            if (!$personal_info) {
                abort(404);
            }
            $personal_info->update($personalInfoValidatedData);

            DB::commit();

            return redirect()->route('employee-profile')->with('success', 'User updated successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error updating user. Please try again.');
        }
    }
}
