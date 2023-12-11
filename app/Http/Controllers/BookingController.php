<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Appointment;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Booking;

class BookingController extends Controller
{
    public function index()
    {

        // $categoryId = 1; // Replace 1 with the ID of the category you want to retrieve

        // $serviceCategories = ServiceCategory::where('id', $categoryId)->all();

         $HairServices  = ServiceCategory::where('id','=', '1')->pluck('name');
         $HairCuts = Service::where('id','=', '1')->pluck('service_name');
         $Hairstylists = Employee::whereJsonContains('emp_jobtitles', 'Hairstylist')->pluck('emp_fname');

        //  $BridalDresser = Employee::where('emp_jobtitles', 'BridalDresser')->pluck('emp_fname');
        //  $NailArtis = Employee::where('emp_jobtitles', 'NailArtist')->pluck('emp_fname');

        return view('project.customer.booking', compact('HairServices', 
                                                        'HairCuts', 
                                                        'Hairstylists',
                                                        // 'BridalDresser',
                                                        // 'NailArtis'
                                                    ));

    }

//     public function calender()
// {
//     try {
//         $events = array();
//         $bookings = Booking::all();

//         foreach ($bookings as $booking) {
//             $events[] = [
//                 'title' => $booking->title,
//                 'start' => $booking->start_date,
//                 'end' => $booking->end_date,
//             ];
//         }

//         // Retrieve and include appointments in the events array
//         $appointments = Appointment::all();
//         foreach ($appointments as $appointment) {
//             $events[] = [
//                 'title' => $appointment->title,
//                 'start' => $appointment->start_date,
//                 'end' => $appointment->end_date,
//                 'color' => '#FF5733', // Customize the color for appointments
//             ];
//         }

//         return view('project.customer.calendar', ['events' => $events]);
//     } catch (\Exception $e) {
//         // Log the error or handle it appropriately
//         return response()->json(['error' => 'Error retrieving data'], 500);
//     }
// }

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
