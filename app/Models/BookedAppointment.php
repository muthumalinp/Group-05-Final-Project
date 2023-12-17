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
        'selectedStylist',
        'selectedDate',
        'selectedTime',
    ];

    public function stylist()
    {
        return $this->belongsTo(Employee::class);
    }
}
