<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    protected $table = 'employee_leaves';
    protected $primarykey = 'id';
    protected $fillable = [
        'employee_id',
        'available_leaves',
        'used_leaves',
        'remaining_leaves',
    ];

    use HasFactory;
}
