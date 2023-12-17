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
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->date('birth_date')->nullable();
            $table->string('nic_no')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('mobile_number_primary')->nullable();
            $table->string('mobile_number_secondary')->nullable();
            $table->string('address_primary')->nullable();
            $table->string('address_secondary')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};
