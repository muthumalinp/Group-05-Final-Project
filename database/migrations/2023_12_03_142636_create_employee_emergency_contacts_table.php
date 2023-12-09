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
        /*Schema::create('employee_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('mobile_number_primary')->nullable();
            $table->string('mobile_number_secondary')->nullable();
            $table->string('address_primary')->nullable();
            $table->string('address_secondary')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::dropIfExists('employee_emergency_contacts');*/
    }
};
