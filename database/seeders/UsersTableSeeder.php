<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed an admin user
        DB::table('users')->insert([
            'fname' => 'Admin',
            'lname' => 'User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'phone_number' => '0715759798',
            'gender' => 'male',
            'dob' => '1990-01-01',
            'password' => Hash::make('AdminUser1'), 
            'role' => 'admin', 
            'remember_token' => Str::random(60),
        ]);

        // Seed an owner user
        DB::table('users')->insert([
            'fname' => 'Owner',
            'lname' => 'User',
            'email' => 'owner@example.com',
            'email_verified_at' => now(),
            'phone_number' => '0715759797',
            'gender' => 'female',
            'dob' => '1985-05-15',
            'password' => Hash::make('OwnerUser1'), 
            'role' => 'owner',
            'remember_token' => Str::random(60),
        ]);

        // Seed an employee user
        DB::table('users')->insert([
            'fname' => 'Employee',
            'lname' => 'User',
            'email' => 'employee@example.com',
            'email_verified_at' => now(),
            'phone_number' => '0715759796',
            'gender' => 'other',
            'dob' => '1995-10-20',
            'password' => Hash::make('EmployeeUser1'), 
            'role' => 'employee',
            'remember_token' => Str::random(60),
        ]);

        // Seed a customer user
        DB::table('users')->insert([
            'fname' => 'Customer',
            'lname' => 'User',
            'email' => 'customer@example.com',
            'email_verified_at' => now(),
            'phone_number' => '0715759795',
            'gender' => 'male',
            'dob' => '1988-07-08',
            'password' => Hash::make('CustomerUser1'), 
            'role' => 'customer',
            'remember_token' => Str::random(60),
        ]);
    }
}
