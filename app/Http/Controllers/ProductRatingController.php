<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating; // Make sure to import the Rating model

class ProductRatingController extends Controller
{
    public function addRating(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'product_ID' => 'required|string',
            'review' => 'required|string',
            'rating' => 'required|integer',
        ]);

        $data['status'] = 1; // Assuming 1 is an active status

        Rating::create($data);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
