<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function addRating(Request $request){
         if(!Auth::check()){
             $message = "Loging to rate this product!";
             return redirect()->back()->with('error_message',$message);
         }
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $user_id = Auth::user()->id;
            // Check if user not already rate this product
            $ratingCount = Rating::where(['user_id'=>$user_id,'product_id'=>$date['product_id']])->count();
            if($ratingCount>0){
                $message = "Your rating already exists for this product!";
                return redirect()->back()->with('error_message',$message);
            }else{
                //echo "Add rating"; die;
                $rating = new Rating;
                $rating->user_id = $user_id;
                $rating->product_id = $date['product_id'];
                $rating->review = $date['review'];
                $rating->rating = $date['rating'];
                $rating->status = 0;
                $rating->save();
            }
        }
    }
}
