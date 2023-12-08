<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create([
            'product_no' => $request->input('product_no'),
            'product_name' => $request->input('product_name'),
            'product_price' => $request->input('product_price'),
            'quantity' => $request->input('quantity'),
        ]);

  

        return redirect()->route('cartstore');
    }
}










