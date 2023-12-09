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
       // migration file: create_services_table.php
       Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Use the appropriate data type for the 'name' column
            $table->decimal('price'); // Use the appropriate data type for the 'price' column
            // Other columns...

            // $table->unsignedBigInteger('service_category_id');
            // $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
