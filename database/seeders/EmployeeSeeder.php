<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for employees
        $employees = [
            [
                'emp_fname' => 'Sandy',
                'emp_lname' => 'Dilshani',
                'emp_jobtitles' => ['Hairstylist', 'BridalDresser'],
                'emp_phone' => '123456789',
                'emp_email' => 'sandydilshani@gmail.com',
                'emp_bsalary' => '50000',
                'emp_rewards' => '5',
            ],
            [
                'emp_fname' => 'Kevin',
                'emp_lname' => 'Perera',
                'emp_jobtitles' => ['Hairstylist'],
                'emp_phone' => '987654321',
                'emp_email' => 'kevinperera@gmail.com',
                'emp_bsalary' => '60000',
                'emp_rewards' => '7',
            ],
            [
                'emp_fname' => 'Yeshani',
                'emp_lname' => 'De Silva',
                'emp_jobtitles' => ['Hairstylist', 'NailArtist', 'BridalDresser'],
                'emp_phone' => '987654321',
                'emp_email' => 'yeshan@gmail.com',
                'emp_bsalary' => '60000',
                'emp_rewards' => '7',
            ],
            [
                'emp_fname' => 'Malki',
                'emp_lname' => 'Jayawardena',
                'emp_jobtitles' => ['Hairstylist', 'NailArtist'],
                'emp_phone' => '987654321',
                'emp_email' => 'malkijaya@gmail.com',
                'emp_bsalary' => '60000',
                'emp_rewards' => '7',
            ],
        ];

        // Insert the sample data into the 'employees' table
        foreach ($employees as $employeeData) {
            Employee::create($employeeData);
        }
    }
}
