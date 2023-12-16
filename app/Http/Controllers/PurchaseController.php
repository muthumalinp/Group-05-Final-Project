<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderedproduct;

class PurchaseController extends Controller
{
    public function makePurchase(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            // Add other validation rules as needed
        ]);



        // Check if the 'cart' session variable exists
        if ($cartItems = session('cart')) {
            foreach ($cartItems as $key => $value) {
                $pn = $key + 1;
                Orderedproduct::create([
                    'product_no' => $pn,
                    'product_name' => $value['desc'],
                    'product_price' => $value['price'],
                    'product_quantity' =>$value['Quantity'],
                    'total' =>$value['itotal'],
                    'full_name' => $validatedData['full_name'],
                    'phoneno' => $validatedData['phone_number'],
                    'email' => $validatedData['email'],
                ]);
            }

            // Clear the cart after successful purchase
            session()->forget('cart');

            // Redirect back or wherever you need to go
            return redirect()->back()->with('success', 'Purchase successful!');
        } else {
            // Handle the case where the cart is empty
            return redirect()->back()->with('error', 'Your cart is empty.');
        }
    }
}
