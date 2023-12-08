<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pjwel extends Model
{
    use HasFactory;
    protected $table = 'pjwels';
    protected $fillable = [

        'pjwid',
        'pjwprice',
        'pjwquantity',
        'pjwimg1',
        'pjwimg2',
        'pjwimg3',
        'pjwimg4',
    ];
}
