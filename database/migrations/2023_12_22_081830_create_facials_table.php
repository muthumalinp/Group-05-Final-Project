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
        Schema::create('facials', function (Blueprint $table) {
            $table->id();
            // $table->string('product_ID');
            // $table->string('category');
            $table->string('name');
            $table->string('price');
            $table->string('Quantity');
            $table->binary('product_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facials');
    }
};
