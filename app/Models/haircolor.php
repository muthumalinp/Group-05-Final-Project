<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class haircolor extends Model
{
    use HasFactory;
    protected $table = 'haircolors';
    protected $fillable = [
        // 'product_ID',
        // 'category',
        'name',
        'price',
        'Quantity',
        'product_image',

    ];
}
