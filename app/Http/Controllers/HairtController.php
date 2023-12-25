<?php

namespace App\Http\Controllers;

use App\Models\Hairt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class HairtController extends Controller
{
    public function owner()
    {
        return view('project.owner');
    }

    public function create13()
    {
        return view('project.public.create13');
    }

    public function index3()
    {
        $product = Hairt::all();
        
        return view('project.public.index3',compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'product_ID' => 'required',
            // 'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'Quantity' => 'required|integer',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = new Hairt;
        // $product->product_ID = $request->input('product_ID');
        // $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->Quantity = $request->input('Quantity'); 
        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->product_image = $filename;
        }

        $product->save();
        return redirect()->back()->with('status', 'Product Added Successfully');
    }
    
        public function edit1($id)
        {
            $product = Hairt::find($id);
            
            return view('project.public.edit3',compact('product'));
        }

        public function update3(Request $request,$id)
        {
            $product = Hairt::find($id);
            // $product->product_ID = $request->input('product_ID');
            // $product->category = $request->input('category');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->Quantity = $request->input('Quantity');
    
            if ($request->hasfile('product_image'))
             {
                $destination = 'uploads/products/'.$product->product_image;

                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file = $request->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $product->product_image = $filename;
            }
    
            $product->update();
            return redirect()->back()->with('status', 'Product Updated Successfully');
        }

        public function delete3($id)
        {
            $product = Hairt::find($id);
            $destination = 'uploads/products/'.$product->product_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

           
            $product->delete();
            return redirect()->back()->with('status', 'Product Deleted Successfully');
            
            
        }

        

}
