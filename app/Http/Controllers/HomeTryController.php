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
            }
    }

    public function owner() {
        if(Auth::id()) {
            $role = Auth()->user()->role;
            if($role == 'owner') {
                return view('project.owner.owner');
            }
        }
    }

    public function admin() {
        if(Auth::id()) {
            $role = Auth()->user()->role;
            if($role == 'admin') {
                return view('project.admin.admin_home');
            }
        }
    }

    public function employee() {
        if(Auth::id()) {
            $role = Auth()->user()->role;
            if($role == 'employee') {
                return view('project.employee.dashboard');
            }
        }
    }
}


// resources\views\project\owner\owner.blade.php