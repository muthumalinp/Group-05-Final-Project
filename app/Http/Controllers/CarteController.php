<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    
    public function showCheckoutInfo()
    {
        $cartItems = session('carte', []); 
        

        return view('checkout_info', compact('cartItems'));
    }

}
