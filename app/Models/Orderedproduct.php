<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderedproduct extends Model
{
    use HasFactory;

    protected $table = 'orderedproducts';

    protected $fillable = [

        'product_no',
        'product_name',
        'product_price',
        'product_quantity',
        'total',
        'full_name',
        'phoneno',
        'email',
    ];


}

