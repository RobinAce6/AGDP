<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_roles', function(Blueprint $table)
		{
			$table->integer('nPR', true);
			$table->integer('role_id')->index('role_id');
			$table->integer('permission_id')->index('permission_id');
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
		Schema::dropIfExists('permission_roles');
	}

}
