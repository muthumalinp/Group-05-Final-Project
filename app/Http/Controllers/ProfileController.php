<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

// app/Http/Controllers/ProfileController.php


    // public function show()
    // {
    //     $user = Auth::user();
    //     return view('profile.show', compact('user'));
    // }

    public function show()
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login'); // Redirect to login if the user is not authenticated
    }

    return view('profile.show', compact('user'));
}


    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add other fields that can be updated
        ]);
    
        // Update user attributes
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update other fields as needed
    
        // Save the changes
        $user->save();
    
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
    





    /*
    public function index()
    {
        $user = auth()->user();
        return view('project/owner/profile/index', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('project/owner/profile/edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = $this->user->find($id);
        $user->update(array_merge($user->toArray(), $request->toArray()));
        return redirect('user');
    }
    */

}