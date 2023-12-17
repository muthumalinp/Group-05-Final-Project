<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('booked_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('selectedServiceCategory')->nullable();
            $table->string('selectedService')->nullable();
            $table->string('stylist');
            $table->string('bookingDate');
            $table->string('adjustedTimeSlots');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_email');
            $table->timestamps();

            // $table->unsignedBigInteger('emp_id');
            // $table->string('emp_fname');
            // $table->date('booking_date');
            // $table->time('start_time');
            // $table->time('end_time');

            // $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booked_appointments');
    }
};
