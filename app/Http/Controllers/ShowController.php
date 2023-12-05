<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\User;
Use App\Models\BookedAppointment;

class ShowController extends Controller
{
    public function show()
    {

        $data=User::all();
        return view('/project/admin/customer_details',compact('data'));
    }

<<<<<<< Updated upstream
    public function showAppointment()
    {

        $appointment=BookedAppointment::all();
        return view('/project/admin/manage_appoinment',compact('appointment'));
    }

=======
>>>>>>> Stashed changes

    
}
