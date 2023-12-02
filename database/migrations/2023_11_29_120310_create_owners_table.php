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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_fname');
            $table->string('owner_lname');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->string('owner_address');
            $table->string('owner_bio');
            $table->binary('owner_photo');
            $table->string('owner_addetails');
            $table->string('owner_rewards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
