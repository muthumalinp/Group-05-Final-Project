<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cartstore(Request $request)
    {
        $product = Product::create([
            'productno' => $request->input('product_no'),
            'productname' => $request->input('product_name'),
            'iprice' => $request->input('product_price'),
            'iquantity' => $request->input('quantity'),
            'itotal' => $request->input('total'),
        ]);

          return redirect()->route('cartstore');
    }
}










