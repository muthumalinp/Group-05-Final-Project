<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// app/Product.php
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_no', 'product_name', 'product_price', 'quantity'];
}


