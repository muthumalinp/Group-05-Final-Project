<?php

namespace App\Http\Controllers;

use App\Models\Facial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class FacialController extends Controller
{
    public function owner()
    {
        return view('project.owner');
    }

    public function create14()
    {
        return view('project.public.create14');
    }

    public function index4()
    {
        $product = Facial::all();
        
        return view('project.public.index4',compact('product'));
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
        $product = new Facial;
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
    
        public function edit4($id)
        {
            $product = Facial::find($id);
            
            return view('project.public.edit1',compact('product'));
        }

        public function update4(Request $request,$id)
        {
            $product =  Facial::find($id);
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

        public function delete1($id)
        {
            $product = Facial::find($id);
            $destination = 'uploads/products/'.$product->product_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

           
            $product->delete();
            return redirect()->back()->with('status', 'Product Deleted Successfully');
            
            
        }

        

}
