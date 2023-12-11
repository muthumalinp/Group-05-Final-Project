<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;


class RequestEmployeeLeave extends Model
{
    protected $table = 'request_employee_leaves';
    protected $primarykey = 'id';
    protected $fillable = [
        'leave_emp_name',
        'leave_emp_position',
        'leave_emp_phone',
        'leave_start_date',
        'leave_end_date',
        'leave_reason',
        'leave_status',
    ];

    use HasFactory;
}
