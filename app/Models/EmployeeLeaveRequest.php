<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeaveRequest extends Model
{
    use HasFactory;

    /*protected $table = 'employee_leave_request';

    protected $fillable = [
        'emp_id',
        'leave_emp_name',
        'leave_emp_position',
        'leave_emp_phone',
        'leave_start_date',
        'leave_end_date',
        'leave_reason',
        'leave_status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id');
    }*/
}
