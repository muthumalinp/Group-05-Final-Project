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
                // if(Auth::id()) {
                //     $role = Auth()->user()->role;
                else if($role == 'owner') {
                        return view('project.owner.owner');
                    }
                else if($role == 'admin') {
                    return view('project.admin.admin_home');
                }
                else if($role == 'employee') {
                    return view('project.employee.dashboard');
                }
                }

            }



            public function showTotalCustomers()
    {

        $totalCustomers = User::where('role', 'customer')->count();
        //dd($totalCustomers);
        return view('/project/admin/admin_home', compact('totalCustomers'));
    }
    



    // public function admin() {
    //     if(Auth::id()) {
    //         $role = Auth()->user()->role;
            
    //     }
    // }

    // public function employee() {
    //     if(Auth::id()) {
    //         $role = Auth()->user()->role;
            
    //     }
    // }
}


// resources\views\project\owner\owner.blade.php