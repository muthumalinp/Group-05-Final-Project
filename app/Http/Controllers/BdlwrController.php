<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bdlwr;
use Illuminate\Support\Facades\View;

class BdlwrController extends Controller
{
    public function index()
    {
        $products = Bdlwr::all();
        return view('bdlwrs.index', ['products' => $products]);

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
            'bdlwrsimg1' => 'required', // Adjust file type and size as needed
            'bdlwrsimg2' => 'required', // Adjust file type and size as needed
            'bdlwrsimg3' => 'required', // Adjust file type and size as needed
            'bdlwrsimg4' => 'required', // Adjust file type and size as needed
            'bdlwrsimg5' => 'required', // Adjust file type and size as needed
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
            $filename =  'bdlwrsimg1'. time().'.'.$extension;
            $file->move('uploads/bdlwrs1/',$filename);
            $bdlwr->bdlwrsimg1 = $filename;
        }else{
            $bdlwr->bdlwrsimg1 = 'default_image1.jpg';
        }

        if($request-> hasfile('bdlwrsimg2')){

            $file = $request->file('bdlwrsimg2');
            $extension = $file->getClientOriginalExtension();
            $filename ='bdlwrsimg2' . time().'.'.$extension;
            $file->move('uploads/bdlwrs2/',$filename);
            $bdlwr->bdlwrsimg2 = $filename;
        }else{
            $bdlwr->bdlwrsimg2 = 'default2_image.jpg';
        }

        if($request-> hasfile('bdlwrsimg3')){

            $file = $request->file('bdlwrsimg3');
            $extension = $file->getClientOriginalExtension();
            $filename ='bdlwrsimg3' . time().'.'.$extension;
            $file->move('uploads/bdlwrs3/',$filename);
            $bdlwr->bdlwrsimg3 = $filename;
        }else{
            $bdlwr->bdlwrsimg3 = 'default_image3.jpg';
        }

        if($request-> hasfile('bdlwrsimg4')){

            $file = $request->file('bdlwrsimg4');
            $extension = $file->getClientOriginalExtension();
            $filename = 'bdlwrsimg4' . time().'.'.$extension;
            $file->move('uploads/bdlwrs4/',$filename);
            $bdlwr->bdlwrsimg4 = $filename;
        }else{
            $bdlwr->bdlwrsimg4 = 'default_image4.jpg';
        }

        if($request-> hasfile('bdlwrsimg5')){

            $file = $request->file('bdlwrsimg5');
            $extension = $file->getClientOriginalExtension();
            $filename ='bdlwrsimg5' . time().'.'.$extension;
            $file->move('uploads/bdlwrs5/',$filename);
            $bdlwr->bdlwrsimg5 = $filename;
        }else{
            $bdlwr->bdlwrsimg5 = 'default_image5.jpg';
        }




        $bdlwr->save();
        return redirect() ->back()->with([
            'success' => 'Product added to cart successfully!',
            'rdate' => $request->input('rdate'),
            'bdate' => $request->input('bdate'),
        ]);


    

    }





    public function carte()
    {
        return view('carte');
    }

    public function addToCart( Request $request, $id)
    {
        
        $bdlwr = Bdlwr::findOrFail($id);
 
        $carte = session()->get('carte', []);


 
        if(isset($carte[$id])) {
            $carte[$id]['quantity']++;
          } else {
            $carte[$id] = [
              "product_name" => $bdlwr->bdlwrstitle,
              "price" => $bdlwr->bdlwrsprice,
              "quantity" => 1,
              "bdate" => $request->input('bdate'),
            "rdate" => $request->input('rdate'),
            ];
          }
        


 
        session()->put('carte', $carte);
        $bdlwr->save();
        return redirect()->back()->with(['success', 'Product add to cart successfully!', ]);
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










