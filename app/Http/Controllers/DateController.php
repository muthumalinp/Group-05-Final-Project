<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function saveDate(Request $request)
    {
        // Get the submitted date from the form
        $inputDate = $request->input('inputDate');

        // Pass the date to the test2 view
        session(['inputDate' => $inputDate]);


        return redirect()->route('', ['inputDate' => $inputDate]);
    }

}
