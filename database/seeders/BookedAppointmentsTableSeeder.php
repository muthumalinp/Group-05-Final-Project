<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookedAppointment;

class BookedAppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stylists = Employee::all();

        // Seed booked appointments
        foreach ($stylists as $stylist) {
            BookedAppointment::create([
                'emp_id' => $stylist->id,
                'emp_fname' => $stylist->emp_fname,
                'booking_date' => now()->addDays(rand(1, 30))->toDateString(),
                'start_time' => '09:00:00',
                'end_time' => '10:30:00',
            ]);
        }
    }
}
