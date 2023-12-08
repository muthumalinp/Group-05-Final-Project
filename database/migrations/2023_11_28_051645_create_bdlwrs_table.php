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
        Schema::create('bdlwrs', function (Blueprint $table) {
            $table->id();
            $table->string('bdlwrsid');
            $table->string('bdlwrstitle');
            $table->string('bdlwrsdesc');
            $table->integer('bdlwrsprice');
            $table->integer('bdlwrsquantity');
            $table->string('bdlwrsimg1');
            $table->string('bdlwrsimg2');
            $table->string('bdlwrsimg3');
            $table->string('bdlwrsimg4');
            $table->string('bdlwrsimg5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdlwrs');
    }
};
