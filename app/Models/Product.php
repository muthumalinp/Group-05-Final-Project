<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
// app/Product.php
class Product extends Model
{
    
    protected $fillable = ['product_no', 'product_name', 'product_price', 'quantity'];
    
}



