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
        Schema::create('booked_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('booked_id');
            $table->string('customer_id');
            $table->string('service_id');
            $table->string('beatician_id');
            $table->string('payment_id');
            $table->string('time');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_appointments');
    }
};
