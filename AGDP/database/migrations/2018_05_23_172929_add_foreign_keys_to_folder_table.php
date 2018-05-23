<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFolderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('folder', function(Blueprint $table)
		{
			$table->foreign('client_id', 'folder_ibfk_1')->references('idClient')->on('clients')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('folder', function(Blueprint $table)
		{
			$table->dropForeign('folder_ibfk_1');
		});
	}

}
