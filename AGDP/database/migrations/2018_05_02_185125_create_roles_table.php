<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('idRole');
            $table->string('nameRole')->unique();

            //$table->integer('permission_role_id')->unsaigned();
            //$table->foreign('permission_role_id')->references('idPer_Rol')->on('permission_roles');
            
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
        Schema::dropIfExists('roles');
    }
}
