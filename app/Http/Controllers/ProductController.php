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
            'Product No' => $request->input('product_no'),
            'Product Name' => $request->input('product_name'),
            'Product Price' => $request->input('product_price'),
            'Quantity' => $request->input('quantity'),
        ]);

          return redirect()->route('cartstore');
    }
}










