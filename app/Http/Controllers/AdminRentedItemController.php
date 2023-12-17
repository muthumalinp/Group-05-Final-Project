<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ReturnedItemNotification;


use App\Models\RentedItem;
use Illuminate\Http\Request;

class AdminRentedItemController extends Controller
{
    public function index()
    {
        $rentedItems = RentedItem::all();
        return view('project.admin.manage_rented_item', compact('rentedItems'));
    }

    public function issuedButtonclicked(Request $request)
{  //dd($request->id);
    // Logic to fetch customer data based on $customerId
    $customer = \App\Models\User::find(1);
//dd($customer);
    // Send the email
    Mail::to($request->id)->send(new ReturnedItemNotification($customer));

    return response()->json(['message' => 'Email sent successfully.']);
}
}

