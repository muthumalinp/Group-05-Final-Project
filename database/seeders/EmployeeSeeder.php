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
                'user_id' => '2',
            ],
            // [
            //     'emp_fname' => 'Kevin',
            //     'emp_lname' => 'Perera',
            //     'emp_jobtitle' => ['Hairstylist'],
            //     'emp_phone' => '987654321',
            //     'emp_email' => 'kevinperera@gmail.com',
            //     'emp_bsalary' => '60000',
            //     'emp_rewards' => '7',
            // ],
            // Add more employees as needed
        ];

        // Insert the sample data into the 'employees' table
        foreach ($employees as $employeeData) {
            // Convert job titles array to a comma-separated string
            $employeeData['emp_jobtitles'] = implode(',', $employeeData['emp_jobtitles']);
            Employee::create($employeeData);
        }
    }
}
