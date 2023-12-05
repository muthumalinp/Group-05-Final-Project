<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\User;
Use App\Models\BookedAppointment;

class ShowController extends Controller
{
    public function show()
    {

        $data=User::where('role', 'customer')->get();
        return view('/project/admin/customer_details',compact('data'));
    }

    public function showAppointment()
    {

        $appointment=BookedAppointment::all();
        return view('/project/admin/manage_appoinment',compact('appointment'));
    }


    
}
