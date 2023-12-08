<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bjwel extends Model
{
    use HasFactory;
    protected $table = 'bjwels';
    protected $fillable = [

        'bjwid',
        'bjwprice',
        'bjwquantity',
        'image',
    ];
}

?>