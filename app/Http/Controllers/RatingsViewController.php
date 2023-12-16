<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingsViewController extends Controller
{
    public function showRatings()
{
    $ratings = Rating::all();
    
    return view('project.owner.ratings.ratings', compact('ratings'));

}
}





