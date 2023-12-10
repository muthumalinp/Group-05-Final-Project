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
            $table->string('leave_emp_name');
            $table->string('leave_emp_position');
            $table->string('leave_emp_email');
            $table->string('leave_emp_phone');
            $table->date('leave_start_date');
            $table->date('leave_end_date');
            $table->text('leave_reason');
            $table->string('leave_status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_employee_leaves');
    }
};
