<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'employee_id',
        'service_id',
        'booking_datetime',
        'customer_name',
        'customer_email',
        'customer_phone',
        // Add other necessary columns for mass assignment
    ];

    // Define relationships if needed
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
