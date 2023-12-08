<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EmployeeNewPasswordRule implements Rule
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
