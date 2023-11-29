<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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
