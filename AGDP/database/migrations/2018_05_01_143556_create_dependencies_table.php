<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencies', function (Blueprint $table) {
            $table->increments('idDep');
            $table->string('nameDep')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependencies');
    }
}