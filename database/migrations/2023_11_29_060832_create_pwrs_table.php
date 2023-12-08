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
        Schema::create('pwrs', function (Blueprint $table) {
            $table->id();
            $table->string('pwrsid');
            $table->string('pwrssize');
            $table->integer('pwrsprice');
            $table->integer('pwrsquantity');
            $table->string('pwrsimg1');
            $table->string('pwrsimg2');
            $table->string('pwrsimg3');
            $table->string('pwrsimg4');
            $table->string('pwrsimg5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pwrs');
    }
};
