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
        Schema::create('bjwels', function (Blueprint $table) {
            $table->id();
            $table->string('bjwid');
            $table->string('bjwtitle');
            $table->string('bjwdesc');
            $table->integer('bjwprice');
            $table->integer('bjwquantity');
            $table->string('bjwimg1');
            $table->string('bjwimg2');
            $table->string('bjwimg3');
            $table->string('bjwimg4');
            $table->string('bjwimg5');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bjwels');
    }
};
