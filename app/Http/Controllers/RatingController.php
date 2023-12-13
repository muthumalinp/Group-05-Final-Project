<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{

    public function addRating(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            echo "<pre>"; print_r($data); die;
            $user_id = Auth::user;

            //Check if user not already rate this product
            $ratingCount = Rating::where(['user_id'=>$user_id,'product_id'=>$data['product_id']])->count();

        }
    }

    public function ratings()
    {
        $ratings = Rating::get()->toArray();
        //dd($ratings);
        return view('project.owner.ratings.ratings')->with(compact('ratings'));
    }
    
}