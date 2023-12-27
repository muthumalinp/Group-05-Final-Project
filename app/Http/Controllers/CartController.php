<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function makePurchase(Request $request)
    {
                // Create a new Cart instance
        $cart = new Cart();
             $cart->hairstr_id = $request->input('productno');
             dd($request->input('productno'));
        $cart->haircolor_id = $request->input('productno');
        $cart->quantity = $request->input('Mod_Quantity');
        $cart->total = $request->input('itotal');

        // You may associate the cart with a user if you have an authentication system
        // Example: $cart->user_id = auth()->user()->id;

        $cart->save();

        // Perform any additional actions, such as sending emails, etc.

        // Clear the cart session or do any other necessary cleanup
        session()->forget('cart');

        return redirect()->route('success.page'); // Redirect to a success page
    }
}

