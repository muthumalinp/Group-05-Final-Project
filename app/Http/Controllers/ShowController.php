<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\User;
Use App\Models\Product;
use App\Models\Owner;
use App\Models\Renteditems;
use App\Models\BookedAppointment;
use App\Models\Employee;




class ShowController extends Controller
{
    public function show()
    {

        $data=User::where('role', 'customer')->get();
        return view('/project/admin/customer_details',compact('data'));
    }

    public function item()
    {


        $sell=Product::all();
        return view('/project/admin/manage_product',compact('sell'));
        
    }




    

    public function cell()
    {

        $buy=Renteditems::all();
        return view('/project/admin/manage_rented_item',compact('buy'));
        
        
    }

    public function rent()
    {

        $point=Renteditems::all();
        return view('/project/admin/returned_rented_item',compact('point'));
        
        
    }

    public function appointment()
    {

        $book=BookedAppointment::all();
        return view('/project/admin/manage_appointment',compact('book'));
        
        
    }




    public function details()
    {

        $sad=Employee::all();
        return view('/project/admin/workers',compact('sad'));
        
        
    }



   
    

    


    
}
