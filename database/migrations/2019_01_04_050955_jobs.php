<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title',190)->nullable();
            $table->text('desc')->nullable();

            $table->string('type',190)->nullable();
            $table->string('specification',190)->nullable();


            $table->string('start_date',190)->nullable();
            $table->string('end_date',190)->nullable();

            $table->string('details',190)->nullable();

            $table->string('visibility',190)->nullable();

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
        Schema::dropIfExists('jobs');
    }
}
