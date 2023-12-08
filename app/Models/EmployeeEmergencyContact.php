<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEmergencyContact extends Model
{
    use HasFactory;

    protected $table = 'employee_emergency_contacts';

    protected $fillable = [
        'name',
        'relationship',
        'mobile_number_primary',
        'mobile_number_secondary',
        'address_primary',
        'address_secondary',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
