<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetails;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Rule as RuleInterface;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class EmployeeProfileController extends Controller
{
    public function editProfile()
    {
        $user = User::find(Auth::id());
        $employee = Employee::where('emp_email', $user->email)->first();
        $employee_details = EmployeeDetails::where('user_id', $user->id)->first();
        return view('/project/employee/profile',compact(
            'user',
            'employee',
            'employee_details'
        ));
    }

    private function updateProfileImage($request, $email)
    {
        $employee = Employee::where('emp_email', $email)->first();
        if (!$employee) {
            abort(404);
        }
        if (!$request->currentProfileImage) {
            $profileImage = $request->file('profileImage');
            if ($profileImage) {
                $imageName = date('YmdHi') . $profileImage->getClientOriginalName();
                $profileImage->move(public_path('employee_assets/uploads'), $imageName);

                if ($employee->owner_photo) {
                    File::delete(public_path('employee_assets/uploads/' . $employee->owner_photo));
                }

                $employee->owner_photo = $imageName;
            } else {
                if ($employee->owner_photo) {
                    File::delete(public_path('employee_assets/uploads/' . $employee->owner_photo));
                }

                $employee->owner_photo = '';
            }
        } elseif ($request->hasFile('profileImage') && $request->currentProfileImage) {
            $profileImage = $request->file('profileImage');
            $imageName = date('YmdHi') . $profileImage->getClientOriginalName();
            $profileImage->move(public_path('employee_assets/uploads'), $imageName);

            if ($employee->owner_photo) {
                File::delete(public_path('employee_assets/uploads/' . $employee->owner_photo));
            }

            $employee->owner_photo = $imageName;
        }
        // dd($employee);
        $employee->save();
    }

    public function updateProfile(Request $request)
    {
        try {
            DB::beginTransaction();

            $userValidatedData = $request->validate([
                'fname' => 'required|max:50|regex:/^[^\d]+$/',
                'lname' => 'required|max:50|regex:/^[^\d]+$/',
                'old_password' => ['nullable', 'min:6', new EmployeeOldPasswordRule],
                'password' => ['nullable', 'min:6', new EmployeeNewPasswordRule($request->input('old_password'))],
                'confirm_password' => ['nullable', 'min:6'],
                'phone_number' => 'required|regex:/^0\d{2}\s?\d{7}$/',
                'email' => [
                    'required',
                    'email',
                    'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                    Rule::unique('users', 'email')->ignore(Auth::id()),
                ],
            ]);
            $employeeDetailsValidatedData = $request->validate([
                'nic_no' => ['regex:/^(?:\d{9}[Vv]|2\d{11})$/'],
                'address' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
                'marital_status' => 'required',
            ]);

            $user = User::where('id', Auth::id())->first();
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

            $employee_details = EmployeeDetails::where('user_id', Auth::id())->first();
            if (!$employee_details) {
                abort(404);
            }
            $employee_details->update($employeeDetailsValidatedData);

            $this->updateProfileImage($request, $user->email);


            DB::commit();

            return redirect()->route('employee.profile')->with('success', 'User updated successfully.');

        }catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error updating user. Please try again.');
        }
    }
}


class EmployeeNewPasswordRule implements RuleInterface
{
    protected $oldPassword;

    public function __construct($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    public function passes($attribute, $value)
    {
        if ($this->oldPassword !== null) {
            return $value === request()->input('confirm_password');
        }

        return true;
    }

    public function message()
    {
        return 'The passwords do not match.';
    }
}

class EmployeeOldPasswordRule implements RuleInterface
{
    public function passes($attribute, $value)
    {
        $user_id = session('user_id');
        $user = User::find($user_id);

        return $user && Hash::check($value, $user->password);
    }

    public function message()
    {
        return 'The old password is incorrect.';
    }

}
