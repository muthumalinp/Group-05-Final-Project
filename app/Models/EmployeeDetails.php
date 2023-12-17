<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    protected $fillable = [
        'birth_date',
        'nic_no',
        'address',
        'nationality',
        'religion',
        'marital_status',
        'name',
        'relationship',
        'mobile_number_primary',
        'mobile_number_secondary',
        'address_primary',
        'address_secondary',
        'user_id',
    ];

    use HasFactory;
}
