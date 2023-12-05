<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bjwel;
use Illuminate\Http\Request;

class BjwelController extends Controller
{
    public function index()
    {
        return view('bjwel.index');

    }

    public function create()
    {
        return view('bjwel.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $bjwel = new Bjwel;
        $bjwel->bjwid = $request-> input('id');
        $bjwel->bjwprice = $request-> input('price');
        $bjwel->bjwquantity = $request-> input('quantity');

        if($request-> hasfile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bjwels/',$filename);
            $bjwel->image = $filename;
        }else{
            $bjwel->image = 'default_image.jpg';
        }

        $bjwel->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }


}
?>