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
        'bjwtitle',
        'bjwdesc',
        'bjwprice',
        'bjwquantity',
        'bjwimage1',
        'bjwimage2',
        'bjwimage3',
        'bjwimage4',
        'bjwimage5',
    ];
}

?>