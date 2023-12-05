<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pwr;

class PwrController extends Controller
{
    public function index()
    {
        return view('pwr.index');

    }

    public function create4()
    {
        return view('pwr.create4');

    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'pwrsimg1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pwrsimg2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pwrsimg3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pwrsimg4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pwrsimg5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $pwr = new Pwr;
        $pwr->pwrsid = $request-> input('id');
        $pwr->pwrssize = $request-> input('size');
        $pwr->pwrsprice = $request-> input('price');
        $pwr->pwrsquantity = $request-> input('quantity');

        if($request-> hasfile('pwrsimg1')){

            $file = $request->file('pwrsimg1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pwrs/',$filename);
            $pwr->pwrsimg1 = $filename;
        }else{
            $pwr->pwrsimg1 = 'default_image.jpg';
        }

        if($request-> hasfile('pwrsimg2')){

            $file = $request->file('pwrsimg2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pwrs/',$filename);
            $pwr->pwrsimg2 = $filename;
        }else{
            $pwr->pwrsimg2 = 'default_image.jpg';
        }

        if($request-> hasfile('pwrsimg3')){

            $file = $request->file('pwrsimg3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pwrs/',$filename);
            $pwr->pwrsimg3 = $filename;
        }else{
            $pwr->pwrsimg3 = 'default_image.jpg';
        }

        if($request-> hasfile('pwrsimg4')){

            $file = $request->file('pwrsimg4');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pwrs/',$filename);
            $pwr->pwrsimg4 = $filename;
        }else{
            $pwr->pwrsimg4 = 'default_image.jpg';
        }

        if($request-> hasfile('pwrsimg1')){

            $file = $request->file('pwrsimg5');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pwrs/',$filename);
            $pwr->pwrsimg5 = $filename;
        }else{
            $pwr->pwrsimg5 = 'default_image.jpg';
        }




        $pwr->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }

}
