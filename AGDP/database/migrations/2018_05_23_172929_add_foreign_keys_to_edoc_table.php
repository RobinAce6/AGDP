<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEdocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('edoc', function(Blueprint $table)
		{
			$table->foreign('folder_id', 'edoc_ibfk_1')->references('idFolder')->on('folder')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('mail_id', 'edoc_ibfk_2')->references('idMail')->on('mail')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('edoc', function(Blueprint $table)
		{
			$table->dropForeign('edoc_ibfk_1');
			$table->dropForeign('edoc_ibfk_2');
		});
	}

}
