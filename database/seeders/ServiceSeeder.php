<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name' => 'Hair Cut - Ladies', 'price' => 5000.00],
            ['name' => 'Hair Cut - Gents', 'price' => 4000.00],
            // Add more services as needed
        ];

        DB::table('services')->insert($services);
    }
}
