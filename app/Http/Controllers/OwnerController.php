<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

use Illuminate\Support\Facades\Storage;


class OwnerController extends Controller
{
    public function create():View
    {
        return view('project.owner.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'owner_fname' => 'required|string|max:255',
            'owner_lname' => 'required|string|max:255',
            'owner_email' => 'required|string|max:255',
            'owner_Phone' => 'required|string|max:255',
            'owner_address' => 'required|string|max:255',
            'owner_bio' => 'required|string|max:255',
            'owner_photo' => 'required|image|max:255',
            'owner_addetails' => 'required|string|max:255',
            'owner_rewards' => 'required|string|max:255',
        ]);
    

        $input = $request->all();

        if ($request->hasFile('owner_photo')) {
            $path = $request->file('owner_photo')->store('owner_photo', 'public');
            $input['owner_photo'] = $path;
        }

        Owner::create($input);
        return redirect()->route('project.owner.profile.create')->with('flash_message', 'Owner Details Store Successfully!');  
    
    }
}
