<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'emp_id';
    protected $fillable = ['emp_fname', 'emp_jobtitle', 'emp_phone'];

    use HasFactory;
}
