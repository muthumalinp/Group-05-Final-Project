<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\User;

class ShowController extends Controller
{
    public function show()
    {

        $data=User::where('role', 'customer')->get();
        return view('/project/admin/customer_details',compact('data'));
    }

    

    
}
