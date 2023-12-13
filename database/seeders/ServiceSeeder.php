<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'service_name' => 'Hair Cut - Ladies',
                'service_price' => 5000.00,
                'duration' => 90,
                'service_category_id' => 1, // Make sure '1' exists in 'service_categories' table
            ],
            [
                'service_name' => 'Hair Cut - Gents',
                'service_price' => 4000.00,
                'duration' => 60,
                'service_category_id' => 1, // Make sure '1' exists in 'service_categories' table
            ],
            // Add more services as needed
        ];
        

        DB::table('services')->insert($services);
    }
}
