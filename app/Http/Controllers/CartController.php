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
        foreach($_SESSION['cart'] as $key => $values)
        {
            $Product_Name=$values['desc'];
            $Price=$values['price'];
            $Quantity=$values['Quantity'];

                            }

        // You may associate the cart with a user if you have an authentication system
        // Example: $cart->user_id = auth()->user()->id;

        $cart->save();

        // Perform any additional actions, such as sending emails, etc.

        // Clear the cart session or do any other necessary cleanup
        session()->forget('cart');

        return redirect()->route('success.page'); // Redirect to a success page
    }
}

