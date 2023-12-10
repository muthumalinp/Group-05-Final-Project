<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = [
        'emp_fname',
        'emp_lname',
        'emp_jobtitle',
        'emp_phone',
        'emp_email',
        'emp_bsalary',
        'emp_rewards',
    ];

    public function leaveRequests(): HasMany
    {
        return $this->hasMany(RequestEmployeeLeave::class, 'leave_emp_name', 'emp_fname');
    }

    public function leave(): HasOne
    {
        return $this->hasOne(EmployeeLeave::class);
    }
    use HasFactory;
}
