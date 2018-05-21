<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Relation with users an diferents process in the system
       /* Schema::table('users',function($table)
        {
            $table->foreign('typePeople')->references('idTypePerson')->on('type_people')->onUpdate('cascade');
        });*/
        
        /*Schema::table('permission_roles',function($table)
        {
            $table->foreign('permissions')->references('idP')->on('permissions')->onUpdate('cascade');
        });*/
       

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
