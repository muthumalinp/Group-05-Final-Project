<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pjwel;


class PjwelController extends Controller
{
    public function index()
    {
        return view('pjwel.index');

    }

    public function create1()
    {
        return view('pjwel.create1');

    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'pjwimg1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $pjwel = new Pjwel;
        $pjwel->pjwid = $request-> input('id');
        $pjwel->pjwprice = $request-> input('price');
        $pjwel->pjwquantity = $request-> input('quantity');

        if($request-> hasfile('pjwimg1')){

            $file = $request->file('pjwimg1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pjwels/',$filename);
            $pjwel->pjwimg1 = $filename;
        }else{
            $pjwel->pjwimg1 = 'default_image.jpg';
        }

        if($request-> hasfile('pjwimg2')){

            $file = $request->file('pjwimg2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pjwels/',$filename);
            $pjwel->pjwimg2 = $filename;
        }else{
            $pjwel->pjwimg2 = 'default_image.jpg';
        }

        if($request-> hasfile('pjwimg3')){

            $file = $request->file('pjwimg3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pjwels/',$filename);
            $pjwel->pjwimg3 = $filename;
        }else{
            $pjwel->pjwimg3 = 'default_image.jpg';
        }

        if($request-> hasfile('pjwimg4')){

            $file = $request->file('pjwimg4');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/pjwels/',$filename);
            $pjwel->pjwimg4 = $filename;
        }else{
            $pjwel->pjwimg4 = 'default_image.jpg';
        }



        $pjwel->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }


}
