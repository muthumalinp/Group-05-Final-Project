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
            $table->string('selectedServiceCategory');
            $table->string('selectedService');
            $table->string('selectedStylist');
            $table->string('selectedDate');
            $table->string('selectedTime');
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
