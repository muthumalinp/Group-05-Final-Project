<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCalendar extends Model
{
    protected $fillable = ['event_title','start_date','end_date'];
    
    use HasFactory;
}
