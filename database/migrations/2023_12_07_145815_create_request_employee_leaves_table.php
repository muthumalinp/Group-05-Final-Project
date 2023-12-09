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
            $table->string('leave_days');
            $table->text('leave_reason');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_employee_leaves');
    }
};
