<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('typePerson_id', 'users_ibfk_1')->references('idTypePerson')->on('typeperson')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('dependency_id', 'users_ibfk_2')->references('idDependency')->on('dependency')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_ibfk_1');
			$table->dropForeign('users_ibfk_2');
		});
	}

}
