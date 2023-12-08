<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pwr extends Model
{
    use HasFactory;
    protected $table = 'pwrs';
    protected $fillable = [

        'pwrsid',
        'pwrstitle',
        'pwrsdesc',
        'pwrsprice',
        'pwrsquantity',
        'pwrsimg1',
        'pwrsimg2',
        'pwrsimg3',
        'pwrsimg4',
        'plwrsimg5',

    ];
}
