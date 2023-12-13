<?php

namespace App\Http\Controllers;


// Example in a controller
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create([
            'productno' => $request->input('product_no'),
            'productname' => $request->input('product_name'),
            'iprice' => $request->input('product_price'),
            'iquantity' => $request->input('quantity'),
        ]);

          return redirect()->route('cartstore');
    }
}










