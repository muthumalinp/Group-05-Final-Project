<?php

namespace App\Http\Controllers;

use App\Models\Hairstr;
use Illuminate\Http\Request;

class HairstrController extends Controller
{
    public function owner()
    {
        return view('project.owner');
    }

    public function create1()
    {
        return view('project.public.create1');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_ID' => 'required',
            'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'Quantity' => 'required|integer',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ProductHairstr = new Hairstr;
        $ProductHairstr->product_ID = $request->input('product_ID');
        $ProductHairstr->category = $request->input('category');
        $ProductHairstr->name = $request->input('name');
        $ProductHairstr->price = $request->input('price');
        $ProductHairstr->Quantity = $request->input('Quantity');

        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $ProductHairstr->product_image = $filename;
        }

        $ProductHairstr->save();
        return redirect()->back()->with('status', 'Product Added Successfully');
    }
}
