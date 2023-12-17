<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renteditems;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;



class RsubmitOrderController extends Controller
{
    public function submitOrder(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'accept_terms' => 'required',
    ]);

    // Get cart items from the session
    $cartItems = session('carte');

    $productNames = [];

    // Iterate through each cart item and save it to the database
    foreach ($cartItems as $id => $details) {
        RentedItems::create([
            'ItemName' => $details['product_name'],
            'ItemQuantity' => $details['quantity'],
            'BorrowedDate' => $details['bdate'],
            'ReturnedDate' => $details['rdate'],
            'price' => $details['price'],
            'CustomerName' => $validatedData['name'],
            'CustomerEmail' => $validatedData['email'],
            'CustomerMobileNo' => $validatedData['phone'],
        ]);

        $productNames[] = $details['product_name'];
    }

    Mail::to($validatedData['email'])->send(new OrderConfirmation($productNames));

    // Add any additional logic or redirect as needed
    return redirect()->back()->with('success', 'Order submitted successfully.');
}
}
