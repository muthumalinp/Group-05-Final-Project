<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->id();
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('emp_jobtitle');
            $table->string('emp_phone')->nullable();
            $table->string('emp_email');
            $table->string('emp_bsalary');
            $table->string('emp_rewards');
            $table->string('emp_password')->default('12345678');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
