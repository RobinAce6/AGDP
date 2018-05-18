<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPer_Rol')->unique();

            $table->integer('idP')->unsaigned();
            $table->foreign('idP')->references('idRole')->on('roles');
            $table->integer('idR')->unsaigned();
            $table->foreign('idR')->references('idP')->on('permissions');

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
        //
    }
}
