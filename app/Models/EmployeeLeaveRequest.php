<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeaveRequest extends Model
{
    use HasFactory;

    /*protected $table = 'employee_leave_request';

    protected $fillable = [
        'employee_name',
        'position',
        'contact_number',
        'start_date',
        'end_date',
        'reason',
        'leave_status',
        'employee_id',
    ];*/

    public function employee()
    {
        /*return $this->belongsTo(Employee::class, 'employee_id');*/
    }
}
