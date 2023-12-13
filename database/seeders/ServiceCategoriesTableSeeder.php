<?php

// database/seeders/ServiceCategoriesTableSeeder.php

// Example: namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Define the service categories data
        $serviceCategoriesData = [
            ['name' => 'Hair Services'],
            ['name' => 'Bridal Services'],
            ['name' => 'Nail Services'],
            ['name' => 'Other Services'],
            // Add more categories as needed
        ];

        // Insert the data into the service_categories table
        ServiceCategory::insert($serviceCategoriesData);
    }
}
