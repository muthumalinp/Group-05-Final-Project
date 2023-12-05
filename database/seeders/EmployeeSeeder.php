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
                'emp_fname' => 'John',
                'emp_lname' => 'Doe',
                'emp_jobtitle' => 'Hairstylist',
                'emp_phone' => '123456789',
                'emp_email' => 'john.doe@example.com',
                'emp_bsalary' => '50000',
                'emp_rewards' => '5',
            ],
            [
                'emp_fname' => 'Jane',
                'emp_lname' => 'Smith',
                'emp_jobtitle' => 'Colorist',
                'emp_phone' => '987654321',
                'emp_email' => 'jane.smith@example.com',
                'emp_bsalary' => '60000',
                'emp_rewards' => '7',
            ],
            // Add more employees as needed
        ];

        // Insert the sample data into the 'employees' table
        foreach ($employees as $employeeData) {
            Employee::create($employeeData);
        }
    }
}
