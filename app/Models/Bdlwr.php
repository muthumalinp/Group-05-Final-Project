<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bdlwr extends Model
{
    use HasFactory;
    protected $table = 'bdlwrs';
    protected $fillable = [

        'bdlwrsid',
        'bdlwrstitle',
        'bdlwrsdesc',
        'bdlwrsprice',
        'bdlwrsquantity',
        'bdlwrsimg1',
        'bdlwrsimg2',
        'bdlwrsimg3',
        'bdlwrsimg4',
        'bdlwrsimg5',

    ];
}
