<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairt extends Model
{
    use HasFactory;
    protected $table = 'hairts';
    protected $fillable = [
        // 'product_ID',
        // 'category',
        'name',
        'price',
        'Quantity',
        'product_image',

    ];


}
