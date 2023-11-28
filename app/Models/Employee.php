<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    use HasFactory;
}
