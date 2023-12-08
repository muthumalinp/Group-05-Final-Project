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
        Schema::create('employee_leave_request', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('position');
            $table->string('contact_number');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->string('leave_status')->default('pending');
            $table->foreignId('employee_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_leave_request');
    }
};
