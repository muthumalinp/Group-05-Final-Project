<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePersonalInformation extends Model
{
    use HasFactory;

    protected $table = 'employee_personal_information';

    protected $fillable = [
        'birth_date',
        'nic_no',
        'address',
        'nationality',
        'religion',
        'marital_status',
        'user_id',
    ];

    protected $dates = [
        'birth_date',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
