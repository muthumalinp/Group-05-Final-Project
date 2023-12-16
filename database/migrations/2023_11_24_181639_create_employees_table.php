<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->json('emp_jobtitles')->nullable(); // JSON column for job titles
            $table->string('emp_phone')->nullable();
            $table->string('emp_email')->unique();
            $table->string('emp_bsalary');
            $table->string('owner_photo')->default('css/owner/owner_profile_image.jpeg');
            $table->string('emp_rewards');
            $table->string('emp_password')->default('12345678');
            $table->rememberToken();
            //personal infomation
           /* $table->date('emp_birth_date');
            $table->string('emp_nic_no');
            $table->string('emp_address');
            $table->string('emp_nationality');
            $table->string('emp_religion');
            $table->string('emp_marital_status');
            //perfile image
            $table->string('profile_image');
            //emergency contacts
            $table->string('emp_em_name');
            $table->string('emp_em_relationship');
            $table->string('emp_em_mobile_number_primary');
            $table->string('emp_em_mobile_number_secondary');
            $table->string('emp_em_address_primary');
            $table->string('emp_em_address_secondary');*/
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
