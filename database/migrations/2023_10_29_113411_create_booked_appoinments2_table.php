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
        Schema::create('booked_appoinments2', function (Blueprint $table) {
            $table->id();
            $table->string('fuName');
            $table->string('eMail');
            $table->string('nbrCode');
            $table->string('phone');
            $table->string('contact');
            $table->string('massage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_appoinments2');
    }
};
