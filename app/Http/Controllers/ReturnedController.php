<?php

namespace App\Http\Controllers;


use App\Models\RentedItem;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReturnConfirmation;

use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    public function index1()
    {
        $rentedItems = RentedItem::all();
        return view('project.admin.returned_rented_item', compact('rentedItems'));
    }

    public function returnedButtonclicked(Request $request)
{  //dd($request->id);
    // Logic to fetch customer data based on $customerId
    $customer = \App\Models\User::find(1);
//dd($customer);
    // Send the email
    Mail::to($request->id)->send(new ReturnConfirmation($customer));

    return response()->json(['message' => 'Email sent successfully.']);
}
}
