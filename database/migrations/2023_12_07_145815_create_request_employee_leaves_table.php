<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('request_employee_leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('leave_emp_name');
            $table->string('leave_emp_position');
            $table->string('leave_emp_email');
            $table->date('leave_start_date');
            $table->date('leave_end_date');
            $table->text('leave_reason');
            $table->string('leave_status')->default('pending');
            $table->unsignedInteger('number_of_days')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_employee_leaves');
    }
};
