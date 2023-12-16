<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employee_details')->insert([
            'birth_date' => '2000-06-03',
            'nic_no' => '200115500320',
            'address' => 'Matara',
            'nationality' => 'SriLankan',
            'religion' => 'Buddhist',
            'marital_status' => 'Single',
            'name' => 'Sachintha',
            'relationship' => 'Friend',
            'mobile_number_primary' => '0701871192',
            'mobile_number_secondary' => '0788538399',
            'address_primary' => 'Matara',
            'address_secondary' => 'Galle',
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
