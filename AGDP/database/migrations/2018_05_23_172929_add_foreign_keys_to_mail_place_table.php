<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mail_place', function(Blueprint $table)
		{
			$table->foreign('mail_id', 'mail_place_ibfk_1')->references('idMail')->on('mail')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('place_id', 'mail_place_ibfk_2')->references('idCity')->on('city')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mail_place', function(Blueprint $table)
		{
			$table->dropForeign('mail_place_ibfk_1');
			$table->dropForeign('mail_place_ibfk_2');
		});
	}

}
