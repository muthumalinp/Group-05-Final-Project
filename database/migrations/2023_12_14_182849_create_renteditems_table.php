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
        Schema::create('renteditems', function (Blueprint $table) {
            $table->id();
            $table->string('ItemName');
            $table->string('ItemId') ->nullable();
            $table->integer('ItemQuantity');
            $table->string('CustomerName');
            $table->string('CustomerEmail');
            $table->string('CustomerMobileNo');
            $table->integer('price');
            $table->date('BorrowedDate');
            $table->date('ReturnedDate');
            $table->string('Status')->default('Pending');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renteditems');
    }
};
