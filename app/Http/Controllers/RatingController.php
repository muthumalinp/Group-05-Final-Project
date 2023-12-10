<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function ratings(){
        $ratings = Rating::get()->toArray();
        dd($ratings);
        return view('admin.ratings.ratings')->with(compact('ratings'));
    }
}
