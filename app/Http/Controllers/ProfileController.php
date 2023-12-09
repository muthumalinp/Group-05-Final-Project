<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Employee;
//use App\Models\EmployeeEmergencyContact;
//use App\Models\EmployeePersonalInformation;
//use App\Models\User;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Validation\Rule;
//use Illuminate\Support\Facades\File;
//use App\Helpers\EmployeeHelper;
//use App\Rules\EmployeeNewPasswordRule;
//use App\Rules\EmployeeOldPasswordRule;
//use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('project/owner/profile/index', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('project/owner/profile/edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user=$this->user->find($id);
        $user->update(array_merge($user->toArray(),$request->toArray()));
        return redirect('user');
    }
    /*public function editProfile()
    {
        $compact = EmployeeHelper::getAllDataRelatedEmployee();
        return view('/project/employee/profile', $compact);
    }

    public function updateProfile(Request $request, $id)
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
                    Rule::unique('users', 'email')->ignore($id),
                ],
            ]);
            $personalInfoValidatedData = $request->validate([
                'nic_no' => ['regex:/^(?:\d{9}[Vv]|2\d{11})$/'],
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

            EmployeeHelper::updateProfileImage($request, $id);


            DB::commit();

            return redirect()->route('employee.profile')->with('success', 'User updated successfully.');

        }catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            dd($e);
                DB::rollBack();
                return back()->with('error', 'Error updating user. Please try again.');
            }
        }*/

}
