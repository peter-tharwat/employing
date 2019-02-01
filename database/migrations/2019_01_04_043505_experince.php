<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Experince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experince', function (Blueprint $table) {
            $table->increments('id');

            $table->string('user_id',190)->nullable();
            
            $table->string('job_title',190)->nullable();
            $table->string('target_name',190)->nullable();

            $table->string('start_date_month',190)->nullable();
            $table->string('start_date_year',190)->nullable();
            $table->string('end_date_month',190)->nullable();
            $table->string('end_date_year',190)->nullable();

            $table->string('details',190)->nullable(); 
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
        Schema::dropIfExists('experince');
    }
}
