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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hairstr_id')->nullable;
            $table->unsignedBigInteger('haircolor_id')->nullable;
            $table->foreign('hairstr_id')->references('id')->on('hairstrs');
            $table->foreign('haircolor_id')->references('id')->on('haircolors');
            $table->integer('Quantity');
            $table->integer('Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
