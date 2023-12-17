<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Appointment;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\BookedAppointment;
use DateTime;
use DateInterval;


class BookingController extends Controller
{
    public function index()
    {

        // $categoryId = 1; // Replace 1 with the ID of the category you want to retrieve

        // $serviceCategories = ServiceCategory::where('id', $categoryId)->all();

         $HairServices  = ServiceCategory::where('id','=', '1')->pluck('name');
         $BridalServices  = ServiceCategory::where('id','=', '2')->pluck('name');
         $NailServices  = ServiceCategory::where('id','=', '3')->pluck('name');
         $OtherServices  = ServiceCategory::where('id','=', '4')->pluck('name');

         $HairCutsL = Service::where('id','=', '1')->pluck('service_name');
         $HairCutsG = Service::where('id','=', '2')->pluck('service_name');

         $Hairstylists1 = Employee::whereJsonContains('emp_jobtitles', 'Hairstylist')->where('id', '1')->pluck('emp_fname');
         $Hairstylists2 = Employee::whereJsonContains('emp_jobtitles', 'Hairstylist')->where('id', '2')->pluck('emp_fname');
         $Hairstylists3 = Employee::whereJsonContains('emp_jobtitles', 'Hairstylist')->where('id', '3')->pluck('emp_fname');
         $Hairstylists4 = Employee::whereJsonContains('emp_jobtitles', 'Hairstylist')->where('id', '4')->pluck('emp_fname');
        //  $emp1 = $Hairstylists->emp_fname;

        // $bookedTimeStart = BookedAppointment::where('emp_id', '=', '1')->pluck('start_time');
        // $bookedTimeEnd = BookedAppointment::where('emp_id', '=', '1')->pluck('end_time');
        
        // Assuming your start time is 9:00 AM
        $startTime = new DateTime('09:00:00');
        
        // Assuming your end time is 3:00 PM
        $endTime = new DateTime('15:00:00');
        
        // Duration of each time slot (15 minutes)
        $interval = new DateInterval('PT15M');
        
        // Array to store time slots
        $timeSlots = [];
        
        // Generate time slots
        $currentSlot = clone $startTime;
        while ($currentSlot <= $endTime) {
            $timeSlots[] = $currentSlot->format('H:i');
            $currentSlot->add($interval);
        }
        function generateTimeSlots($start, $end, $interval)
        {
            $slots = [];
            $currentSlot = new DateTime($start);
            while ($currentSlot < new DateTime($end)) {
                $slots[] = $currentSlot->format('H:i');
                $currentSlot->add($interval);
            }
            return $slots;
        }
        
        // Filter out booked time slots
        // $bookedTimeSlots = [];
        // foreach ($bookedTimeStart as $index => $start) {
        //     $end = $bookedTimeEnd[$index];
        //     $bookedTimeSlots = array_merge($bookedTimeSlots, generateTimeSlots($start, $end, $interval));
        // }
        
        $availableTimeSlots = array_diff($timeSlots);
        
        // Output the available time slots
        // print_r($availableTimeSlots);

        
        
        
        
        // Adjust the time slots based on the duration
        $duration = Service::where('id', '=', '1')->value('duration');
        
        // Adjust the time slots based on the duration
// $duration = Service::where('id', '=', '1')->value('duration');
// $adjustedTimeSlots = array_map(function ($time) use ($duration) {
//     return date('H:i', strtotime($time) + ($duration * 60));
// }, $availableTimeSlots);

// Output the adjusted time slots
// print_r($adjustedTimeSlots);

// $duration = Service::where('id', '=', '1')->value('duration');
// $timeSlots = array_map(function ($time) use ($duration) {
//     // Use $duration directly (it's already in minutes)
//     return date('H:i', strtotime($time) + ($duration * 60));
// }, $timeSlots);




        //  $BridalDresser = Employee::where('emp_jobtitles', 'BridalDresser')->pluck('emp_fname');
        //  $NailArtis = Employee::where('emp_jobtitles', 'NailArtist')->pluck('emp_fname');

        return view('project.customer.booking', compact('HairServices', 'BridalServices', 'NailServices','OtherServices',
                                                        'HairCutsL', 'HairCutsG',
                                                        'Hairstylists1',
                                                        'Hairstylists2',
                                                        'Hairstylists3',
                                                        'Hairstylists4',
                                                        'availableTimeSlots',
                                                        // 'adjustedTimeSlots',
                                                        'duration',
                                                        // 'bookedTimeStart',
                                                        // 'bookedTimeEnd',
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
    dd($request->all());
    $bookedAppointment = new BookedAppointment([
        'selectedServiceCategory' => $request->input('selectedServiceCategory'),
        'selectedService' => $request->input('selectedService'),
        'selectedStylist' => $request->input('selectedStylist'),
        'selectedDate' => $request->input('selectedDate'),
        'selectedTime' => $request->input('selectedTime'),
    ]);

    // Save the booked appointment to the database
    $bookedAppointment->save();

    // You can return a response or redirect as needed
    return response()->json(['message' => 'Booking saved successfully']);
}
    
}
