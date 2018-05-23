<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPermissionRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permission_roles', function(Blueprint $table)
		{
			$table->foreign('permission_id', 'permission_roles_ibfk_1')->references('idPermission')->on('permission')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('role_id', 'permission_roles_ibfk_2')->references('idRole')->on('role')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permission_roles', function(Blueprint $table)
		{
			$table->dropForeign('permission_roles_ibfk_1');
			$table->dropForeign('permission_roles_ibfk_2');
		});
	}

}
