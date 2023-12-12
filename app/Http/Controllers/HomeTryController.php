<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeTryController extends Controller
{
    public function index() {
            if(Auth::id()) {
                $role = Auth()->user()->role;

                if($role == 'customer') {
                    return view('project.customer.dashboard');
                }
                else if($role == 'owner') {
                    return view('project.owner.owner');
                }
            }
    }
}



// resources\views\project\owner\owner.blade.php