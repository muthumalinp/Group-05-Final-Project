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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->decimal('service_price', 8, 2);
            $table->integer('duration');
            $table->unsignedBigInteger('service_category_id');
            $table->timestamps();
        
            // Define foreign key constraint
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
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
