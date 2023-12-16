<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pjwel;


class PjwelController extends Controller
{
    public function index()
    {
        $products = Pjwel::all();
        return view('pjwel.index', ['products' => $products]);
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
            'pjwtitle' => 'required',
            'pjwdesc' => 'required',
            'quantity' => 'required|integer',
            'pjwimg1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'pjwimg4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $pjwel = new Pjwel;
        $pjwel->pjwid = $request-> input('id');
        $pjwel->pjwtitle = $request-> input('pjwtitle');
        $pjwel->pjwdesc = $request-> input('pjwdesc');
        $pjwel->pjwprice = $request-> input('price');
        $pjwel->pjwquantity = $request-> input('quantity');

        if($request-> hasfile('pjwimg1')){

            $file = $request->file('pjwimg1');
            $extension = $file->getClientOriginalExtension();
            $filename ='pjwimg1' . time().'.'.$extension;
            $file->move('uploads/pjwels1/',$filename);
            $pjwel->pjwimg1 = $filename;
        }else{
            $pjwel->pjwimg1 = 'default_image1.jpg';
        }

        if($request-> hasfile('pjwimg2')){

            $file = $request->file('pjwimg2');
            $extension = $file->getClientOriginalExtension();
            $filename ='pjwimg2' . time().'.'.$extension;
            $file->move('uploads/pjwels2/',$filename);
            $pjwel->pjwimg2 = $filename;
        }else{
            $pjwel->pjwimg2 = 'default_image2.jpg';
        }

        if($request-> hasfile('pjwimg3')){

            $file = $request->file('pjwimg3');
            $extension = $file->getClientOriginalExtension();
            $filename ='pjwimg3'. time().'.'.$extension;
            $file->move('uploads/pjwels3/',$filename);
            $pjwel->pjwimg3 = $filename;
        }else{
            $pjwel->pjwimg3 = 'default_image3.jpg';
        }

        if($request-> hasfile('pjwimg4')){

            $file = $request->file('pjwimg4');
            $extension = $file->getClientOriginalExtension();
            $filename = 'pjwimg4'.time().'.'.$extension;
            $file->move('uploads/pjwels4/',$filename);
            $pjwel->pjwimg4 = $filename;
        }else{
            $pjwel->pjwimg4 = 'default_image4.jpg';
        }

        if($request-> hasfile('pjwimg5')){

            $file = $request->file('pjwimg5');
            $extension = $file->getClientOriginalExtension();
            $filename = 'pjwimg5'.time().'.'.$extension;
            $file->move('uploads/pjwels5/',$filename);
            $pjwel->pjwimg5 = $filename;
        }else{
            $pjwel->pjwimg5 = 'default_image5.jpg';
        }



        $pjwel->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }


}
