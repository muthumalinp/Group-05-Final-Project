<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function ratings(){
        $ratings = Rating::with(['user','hairstrs'])->get()->toArray();

        //dd($ratings);
        return view('project.owner.ratings.ratings')->with(compact('ratings'));

    }
}
