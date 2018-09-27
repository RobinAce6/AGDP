<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->date('receivedDate');
            $table->integer('proyect_id')->unsigned();
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('consectutive');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('subjet', 200);
            $table->string('observations', 200);
            $table->string('folder', 200);
            $table->string('companymsn', 30)->nullable();
            $table->string('namemessenger', 50)->nullable(); 
            $table->string('typeresponse', 50);    
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->rememberToken();
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
        Schema::dropIfExists('mails');
    }
}
