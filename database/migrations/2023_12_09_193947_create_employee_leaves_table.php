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
        Schema::create('employee_leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->constrained();
            //$table->foreignId('employee_id')->constrained(); // Assuming you have an 'employees' table
            $table->integer('available_leaves')->default(0);
            $table->integer('used_leaves')->default(0);
            $table->integer('remaining_leaves')->default(0);
            $table->timestamps();
        });

        Schema::table('employee_leaves', function (Blueprint $table) {
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_leaves');
    }
};
