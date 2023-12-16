<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = [
        'emp_fname', 'emp_lname', 'emp_jobtitles', 'emp_phone', 'emp_email', 'emp_bsalary', 'emp_rewards','remember_token',
    ];

    protected $casts = [
        'emp_jobtitles' => 'json', // Specify JSON casting for the emp_jobtitles field
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
