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
        Schema::table('request_employee_leaves', function (Blueprint $table) {
            if (!Schema::hasColumn('request_employee_leaves', 'number_of_days')) {
                $table->unsignedInteger('number_of_days')->after('leave_end_date');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request_employee_leaves', function (Blueprint $table) {
            $table->dropColumn('number_of_days');
        });
    }
};
