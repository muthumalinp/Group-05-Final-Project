<?php

// database/seeders/ServicesTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        // You can adjust this data as needed
        $services = [
            ['name' => 'Hair Cut - Ladies', 'description' => 'Hair cutting service for ladies', 'price' => 5000.00],
            ['name' => 'Hair Cut - Gents', 'description' => 'Hair cutting service for gents', 'price' => 4000.00],
            // Add more services as needed
        ];

        DB::table('services')->insert($services);
    }
}
