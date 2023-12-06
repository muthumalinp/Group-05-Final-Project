<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employee_leaves', function (Blueprint $table) {
            $table->string('name');
            $table->string('position');
            $table->string('email');
            $table->string('phone');
            $table->string('workDays');
            $table->text('reason');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_leaves', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('position');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('workDays');
            $table->dropColumn('reason');
        });
    }
};
