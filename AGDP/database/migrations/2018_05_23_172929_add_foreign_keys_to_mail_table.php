<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mail', function(Blueprint $table)
		{
			$table->foreign('city_id', 'mail_ibfk_1')->references('idCity')->on('city')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('storagew_id', 'mail_ibfk_2')->references('idStorageWay')->on('storageway')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mail', function(Blueprint $table)
		{
			$table->dropForeign('mail_ibfk_1');
			$table->dropForeign('mail_ibfk_2');
		});
	}

}
