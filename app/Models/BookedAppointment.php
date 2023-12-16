<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class BookedAppointment extends Model
{
    protected $fillable = ['emp_id','emp_fname', 'booking_date', 'start_time','end_time'];

    public function stylist()
    {
        return $this->belongsTo(Employee::class);
    }
}
