<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use GuzzleHttp\Psr7\Response;

class BookingController extends Controller
{

    public function index()
{
    $hairstylists = Employee::where('emp_jobtitle', 'Hairstylist')->select('emp_fname')->get();
    return view('/project/customer/booking', compact('hairstylists'));
}

    

















//     public function index()
// {
//     $hairstylists = [
//         'haircut' => ['Stylist 1', 'Stylist 2', 'Stylist 3'],
//         'bridal' => ['Bridal Stylist 1', 'Bridal Stylist 2', 'Bridal Stylist 3'],
//         'nail' => ['Nail Stylist 1', 'Nail Stylist 2', 'Nail Stylist 3'],
//         'other' => ['Other Stylist 1', 'Other Stylist 2', 'Other Stylist 3'],
//     ];

//     return view('project.customer.booking', compact('hairstylists'));
// }


    // Add other methods for storing, updating, and deleting bookings
}
