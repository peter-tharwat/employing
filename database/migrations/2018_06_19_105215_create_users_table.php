<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name',190)->nullable();
            $table->string('phone',20)->nullable();

            $table->string('email',190)->nullable();
            $table->string('email_ver_num',190)->nullable();
            $table->string('email_ver',190)->nullable();

            $table->string('password',190)->nullable();
            $table->string('sex',190)->nullable();
            $table->string('country',190)->nullable();
            $table->string('city',190)->nullable();
            $table->string('location_status',190)->nullable();

            $table->string('country_type',190)->nullable();
            $table->string('details1',190)->nullable();


            $table->string('qualification',190)->nullable();
            $table->string('specification',190)->nullable();
            $table->string('university_name',190)->nullable();
            $table->string('university_country',190)->nullable();
            $table->string('gpa',190)->nullable();
            $table->string('degrees_type',190)->nullable();
            $table->string('graduation_year',190)->nullable();
            $table->string('graduation_country',190)->nullable();
            
            $table->string('details2',190)->nullable();


            $table->string('recommended_to',190)->nullable();
            $table->string('has_exp',190)->nullable();



            $table->string('pdf_url',190)->nullable();



            $table->string('personal_info_step',190)->nullable();
            $table->string('qualification_step',190)->nullable();
            $table->string('exp_step',190)->nullable();
            $table->string('files_step',190)->nullable();

            $table->string('is_admin',190)->nullable();
















 
            $table->string('remember_token',190)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
