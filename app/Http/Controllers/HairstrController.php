<?php

namespace App\Http\Controllers;

use App\Models\Hairstr;
use Illuminate\Http\Request;

class HairstrController extends Controller
{
    public function product()
    {
        return view('project.public.product');
    }

    public function create1()
    {
        return view('project.public.create1');
    }

    public function store(Request $request)
    {
        $ProductHairstr = new Hairstr;
        $ProductHairstr->product_ID = $request->input('product_ID');
        $ProductHairstr->name = $request->input('name');
        $ProductHairstr->price = $request->input('price');
        $ProductHairstr->Quantity = $request->input('Quantity');
        if($request->hasfile('product_image'))
        {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products/', $filename);
            $ProductHairstr->product_image =   $filename;
        }
        $ProductHairstr->save();
      return redirect()->back()->with('status','Product Added Successfully');
    }
}
