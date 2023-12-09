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
        Schema::create('pjwels', function (Blueprint $table) {
            $table->id();
            $table->string('pjwid');
            $table->string('pjwtitle');
            $table->string('pjwdesc');
            $table->integer('pjwprice');
            $table->integer('pjwquantity');
            $table->string('pjwimg1');
            $table->string('pjwimg2');
            $table->string('pjwimg3');
            $table->string('pjwimg4');
            $table->string('pjwimg5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pjwels');
    }
};
