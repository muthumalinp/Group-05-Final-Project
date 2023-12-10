<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Booking;

class BookingController extends Controller
{
    public function index()
    {
        // Fetch hairstylists, BridalDressers, and NailArtists separately
        $hairstylists = Employee::where('emp_jobtitles', 'Hairstylist')->pluck('emp_fname');
        $BridalDressers = Employee::where('emp_jobtitles', 'BridalDresser')->pluck('emp_fname');
        $NailArtists = Employee::where('emp_jobtitles', 'NailArtist')->pluck('emp_fname');

        $serviceCategories = ServiceCategory::where('id', '1')->pluck('name'); // Fetch all service categories from the database

        return view('project.customer.booking', compact('hairstylists', 'BridalDressers', 'NailArtists', 'serviceCategories'));
    }

    public function getServices($category)
{
    // Retrieve services for the specified category
    // Assuming service_category_id is used to store the category information
    $services = Service::where('service_category_id', $category)->pluck('service_name');

    return response()->json($services);
}


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'service_id' => 'required|exists:services,id',
            'booking_datetime' => 'required|date',
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            // Add other necessary validation rules
        ]);

        // Create a new booking
        Booking::create($validatedData);

        // Redirect or perform any other actions after successful submission
        return redirect()->back()->with('success', 'Booking created successfully');
    }

    // Add other methods for updating and deleting bookings
}
