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
        Schema::create('orderedproducts', function (Blueprint $table) {
            $table->id();
            $table->string('product_no');
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_quantity');
            $table->integer('total');
            $table->string('full_name');
            $table->string('phoneno');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderedproducts');
    }
};
