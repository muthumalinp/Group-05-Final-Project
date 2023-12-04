<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDash extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['emp_fname','emp_lname','emp_jobtitle','emp_email'];
    use HasFactory;
}
