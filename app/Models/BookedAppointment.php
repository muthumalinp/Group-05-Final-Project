<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class BookedAppointment extends Model
{
    protected $fillable = [
        'selectedServiceCategory',
        'selectedService',
        'stylist',
        'bookingDate',
        'adjustedTimeSlots',
        'user_id',  // Add user ID column
        'user_email',  // Add user email column

    ];

    public function stylist()
    {
        return $this->belongsTo(Employee::class);
    }
}
