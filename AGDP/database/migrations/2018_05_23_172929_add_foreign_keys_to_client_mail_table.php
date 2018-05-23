<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('client_mail', function(Blueprint $table)
		{
			$table->foreign('client_id', 'client_mail_ibfk_1')->references('idClient')->on('clients')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('mail_id', 'client_mail_ibfk_2')->references('idMail')->on('mail')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('client_mail', function(Blueprint $table)
		{
			$table->dropForeign('client_mail_ibfk_1');
			$table->dropForeign('client_mail_ibfk_2');
		});
	}

}
