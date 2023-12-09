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
            'password' => Hash::make('EmployeeUser1'), 
            'role' => 'employee',
            'remember_token' => Str::random(60),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'fname' => 'Sandy',
            'lname' => 'Dilshani',
            'email' => 'sandydilshani@gmail.com',
            'email_verified_at' => now(),
            'phone_number' => '0775769796',
            'password' => Hash::make('sandydilshani'), 
            'role' => 'employee',
            'remember_token' => Str::random(60),
        ]);

    }
}
