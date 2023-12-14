<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bjwel;
use Illuminate\Http\Request;

class BjwelController extends Controller
{
    public function index()
    {
        $products = Bjwel::all();
        return view('bjwel.index', ['products' => $products]);

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
            'bjwtitle' => 'required',
            'bjwdesc' => 'required',
            'quantity' => 'required|integer',
            'bjwimg1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bjwimg2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bjwimg3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bjwimg4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
            'bjwimg5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        $bjwel = new Bjwel;
        $bjwel->bjwid = $request-> input('id');
        $bjwel->bjwtitle = $request-> input('bjwtitle');
        $bjwel->bjwdesc = $request-> input('bjwdesc');
        $bjwel->bjwprice = $request-> input('price');
        $bjwel->bjwquantity = $request-> input('quantity');

        if($request-> hasfile('bjwimg1')){

            $file = $request->file('bjwimg1');
            $extension = $file->getClientOriginalExtension();
            $filename ='bjwimg1'. time().'.'.$extension;
            $file->move('uploads/bjwels1/',$filename);
            $bjwel->bjwimg1 = $filename;
        }else{
            $bjwel->bjwimg1 = 'default_image1.jpg';
        }

        if($request-> hasfile('bjwimg2')){

            $file = $request->file('bjwimg2');
            $extension = $file->getClientOriginalExtension();
            $filename ='bjwimg2'. time().'.'.$extension;
            $file->move('uploads/bjwels2/',$filename);
            $bjwel->bjwimg2 = $filename;
        }else{
            $bjwel->bjwimg2 = 'default_image2.jpg';
        }

        if($request-> hasfile('bjwimg3')){

            $file = $request->file('bjwimg3');
            $extension = $file->getClientOriginalExtension();
            $filename ='bjwimg3'. time().'.'.$extension;
            $file->move('uploads/bjwels3/',$filename);
            $bjwel->bjwimg3 = $filename;
        }else{
            $bjwel->bjwimg3= 'default_image3.jpg';
        }

        if($request-> hasfile('bjwimg4')){

            $file = $request->file('bjwimg4');
            $extension = $file->getClientOriginalExtension();
            $filename ='bjwimg4'. time().'.'.$extension;
            $file->move('uploads/bjwels4/',$filename);
            $bjwel->bjwimg4 = $filename;
        }else{
            $bjwel->bjwimg4 = 'default_image4.jpg';
        }

        if($request-> hasfile('bjwimg5')){

            $file = $request->file('bjwimg5');
            $extension = $file->getClientOriginalExtension();
            $filename ='bjwimg5'. time().'.'.$extension;
            $file->move('uploads/bjwels5/',$filename);
            $bjwel->bjwimg5 = $filename;
        }else{
            $bjwel->bjwimg5 = 'default_image5.jpg';
        }

        $bjwel->save();
        return redirect() ->back()->with('status','Product Data Added Successfully');


    

    }

    public function carte()
    {
        return view('carte');
    }
    public function addToCart($id)
    {
        
        $bjwel = Bjwel::findOrFail($id);
 
        $carte = session()->get('carte', []);
 
        if(isset($carte[$id])) {
            $carte[$id]['quantity']++;
        }  else {
            $carte[$id] = [
                "product_name" => $bjwel->bdlwrstitle,
                "photo" =>  $bjwel->bdlwrsimg1,
                "price" => $bjwel->bjwprice,
                "quantity" => 1
            ];
        }
 
        session()->put('carte', $carte);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $carte = session()->get('carte');
            $carte[$request->id]["quantity"] = $request->quantity;
            session()->put('carte', $carte);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $carte = session()->get('carte');
            if(isset($carte[$request->id])) {
                unset($carte[$request->id]);
                session()->put('carte', $carte);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function showCheckoutInfo()
    {
        $cartItems = session('carte', []); 
        

        $total = 0;
        foreach ($cartItems as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

       

        return view('checkout_info', compact('cartItems'));
    }



    

}
?>