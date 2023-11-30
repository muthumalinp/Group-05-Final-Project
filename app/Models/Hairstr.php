<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairstr extends Model
{
    use HasFactory;
    protected $table = 'hairstrs';
    protected $fillable = [
        'product_ID',
        'name',
        'price',
        'Quantity',
        'product_image',

    ];


}
