<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\User;
Use App\Models\Product;


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

        $buy=Product::all();
        return view('/project/admin/delivered_product',compact('buy'));
        
    }

    


    
}
