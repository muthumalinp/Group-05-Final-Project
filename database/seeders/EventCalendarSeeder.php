<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCalendarSeeder extends Seeder
{
   
    public function run(): void
    {
         // Clear existing records to start fresh
         DB::table('event_calendars')->truncate();

         // Insert sample data
         DB::table('event_calendars')->insert([
             [
                 'event_title' => 'Meeting 1',
                 'start_date' => now(),
                 'end_date' => now()->addHours(2),
             ],
             [
                 'event_title' => 'Conference',
                 'start_date' => now()->addDays(2),
                 'end_date' => now()->addDays(3),
             ],
         ]);
    }
}
