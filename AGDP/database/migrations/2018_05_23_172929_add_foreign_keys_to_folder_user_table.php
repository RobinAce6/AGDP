<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFolderUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('folder_user', function(Blueprint $table)
		{
			$table->foreign('folder_id', 'folder_user_ibfk_1')->references('idFolder')->on('folder')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'folder_user_ibfk_2')->references('idUser')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('folder_user', function(Blueprint $table)
		{
			$table->dropForeign('folder_user_ibfk_1');
			$table->dropForeign('folder_user_ibfk_2');
		});
	}

}
