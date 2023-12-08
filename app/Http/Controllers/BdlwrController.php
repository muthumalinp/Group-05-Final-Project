<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bdlwr;

class BdlwrController extends Controller
{
    public function index()
    {
        return view('bdlwr.index');

    }

    public function create3()
    {
        return view('bdlwr.create3');

    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'bdlwrstitle' => 'required',
            'bdlwrsdesc' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'bdlwrsimg1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bdlwrsimg2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bdlwrsimg3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bdlwrsimg4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bdlwrsimg5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $bdlwr = new Bdlwr;
        $bdlwr->bdlwrsid = $request-> input('id');
        $bdlwr->bdlwrstitle = $request-> input('bdlwrstitle');
        $bdlwr->bdlwrsdesc = $request-> input('bdlwrsdesc');
        $bdlwr->bdlwrsprice = $request-> input('price');
        $bdlwr->bdlwrsquantity = $request-> input('quantity');

        if($request-> hasfile('bdlwrsimg1')){

            $file = $request->file('bdlwrsimg1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bdlwrs/',$filename);
            $bdlwr->bdlwrsimg1 = $filename;
        }else{
            $bdlwr->bdlwrsimg1 = 'default_image.jpg';
        }

        if($request-> hasfile('bdlwrsimg2')){

            $file = $request->file('bdlwrsimg2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bdlwrs/',$filename);
            $bdlwr->bdlwrsimg2 = $filename;
        }else{
            $bdlwr->bdlwrsimg2 = 'default_image.jpg';
        }

        if($request-> hasfile('bdlwrsimg3')){

            $file = $request->file('bdlwrsimg3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bdlwrs/',$filename);
            $bdlwr->bdlwrsimg3 = $filename;
        }else{
            $bdlwr->bdlwrsimg3 = 'default_image.jpg';
        }

        if($request-> hasfile('bdlwrsimg4')){

            $file = $request->file('bdlwrsimg4');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bdlwrs/',$filename);
            $bdlwr->bdlwrsimg4 = $filename;
        }else{
            $bdlwr->bdlwrsimg4 = 'default_image.jpg';
        }

        if($request-> hasfile('bdlwrsimg5')){

            $file = $request->file('bdlwrsimg5');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bdlwrs/',$filename);
            $bdlwr->bdlwrsimg5 = $filename;
        }else{
            $bdlwr->bdlwrsimg5 = 'default_image.jpg';
        }




        $bdlwr->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }



}
