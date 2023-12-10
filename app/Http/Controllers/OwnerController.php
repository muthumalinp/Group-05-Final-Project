<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Employee;
use App\Models\User;

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

    $existingOwner = Owner::first();

    // Handle file upload
    if ($request->hasFile('owner_photo')) {
        $path = $request->file('owner_photo')->store('owner_photos', 'public');
    }

    // Update or create data in the database
    if ($existingOwner) {
        // If owner data exists, update the record
        $existingOwner->update([
            'owner_fname' => $request->input('owner_fname'),
            'owner_lname' => $request->input('owner_lname'),
            'owner_email' => $request->input('owner_email'),
            'owner_phone' => $request->input('owner_phone'),
            'owner_address' => $request->input('owner_address'),
            'owner_bio' => $request->input('owner_bio'),
            'owner_photo' => $path ?? $existingOwner->owner_photo,
            'owner_addetails' => $request->input('owner_addetails'),
            'owner_rewards' => $request->input('owner_rewards'),
        ]);
    } else {
        // If owner data doesn't exist, create a new record
        Owner::create([
            'owner_fname' => $request->input('owner_fname'),
            'owner_lname' => $request->input('owner_lname'),
            'owner_email' => $request->input('owner_email'),
            'owner_phone' => $request->input('owner_phone'),
            'owner_address' => $request->input('owner_address'),
            'owner_bio' => $request->input('owner_bio'),
            'owner_photo' => $path ?? null, 
            'owner_addetails' => $request->input('owner_addetails'),
            'owner_rewards' => $request->input('owner_rewards'),
        ]);
    }

    // Store data in the database
    /*Owner::create([
        'owner_fname' => $request->input('owner_fname'),
        'owner_lname' => $request->input('owner_lname'),
        'owner_email' => $request->input('owner_email'),
        'owner_phone' => $request->input('owner_phone'),
        'owner_address' => $request->input('owner_address'),
        'owner_bio' => $request->input('owner_bio'),
        'owner_photo' => $path, 
        'owner_addetails' => $request->input('owner_addetails'),
        'owner_rewards' => $request->input('owner_rewards'),
    ]);*/

    
    // Redirect back with a success message
    return redirect()->back()->with('flash_message', 'Owner Details Stored Successfully!');
}

/*public function showOwnerProfile()
{
    $owner = Owner::first(); // Retrieve the first owner record

    return view('owner', compact('owner'));
}*/

    /*-----reportpart------*/
    public function showTtls()
    {

        $totalCustomers = User::where('role', 'customer')->count();
        $totalEmployees = Employee::count();
        //dd($totalCustomers);
        return view('/project/owner/report', compact('totalCustomers','totalEmployees'));
    }

    //owner profile display function
    /*--public function showProfile()
    {
        $owner = Owner::first();

        if (!$owner) {
            abort(404, 'Owner not found');
        }
        return view('/project/owner/owner', compact('owner'));
    }--*/

    /*public function showProfile()
    {
        $owner = Owner::first();
        return view('project.owner.owner', ['owner' => $owner]);
    }*/

    


}
