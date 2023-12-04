<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class OwnerController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'owner_fname' => 'required|string|max:255',
        'owner_lname' => 'required|string|max:255',
        'owner_email' => 'required|string|max:255',
        'owner_phone' => 'required|string|max:255',
        'owner_address' => 'required|string|max:255',
        'owner_bio' => 'required|string|max:255',
        'owner_photo' => 'required|image|max:255',
        'owner_addetails' => 'required|string|max:255',
        'owner_rewards' => 'required|string|max:255',
    ]);

    // Handle file upload
    if ($request->hasFile('owner_photo')) {
        $path = $request->file('owner_photo')->store('owner_photos', 'public');
    }

    // Store data in the database
    Owner::create([
        'owner_fname' => $request->input('owner_fname'),
        'owner_lname' => $request->input('owner_lname'),
        'owner_email' => $request->input('owner_email'),
        'owner_phone' => $request->input('owner_phone'),
        'owner_address' => $request->input('owner_address'),
        'owner_bio' => $request->input('owner_bio'),
        'owner_photo' => $path, 
        'owner_addetails' => $request->input('owner_addetails'),
        'owner_rewards' => $request->input('owner_rewards'),
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('flash_message', 'Owner Details Stored Successfully!');
}

}
