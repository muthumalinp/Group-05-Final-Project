<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EmployeeOldPasswordRule implements Rule
{
    /*public function passes($attribute, $value)
    {
        $user_id = session('user_id');
        $user = User::find($user_id);

        return $user && Hash::check($value, $user->password);
    }

    public function message()
    {
        return 'The old password is incorrect.';
    }*/
}
