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
        /*Schema::table('employee_personal_information', function (Blueprint $table) {
            $table->renameColumn('passport_no', 'nic_no');
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('employee_personal_information', function (Blueprint $table) {
            //
        });*/
    }
};
