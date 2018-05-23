<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailDependencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mail_dependency', function(Blueprint $table)
		{
			$table->foreign('mail_id', 'mail_dependency_ibfk_1')->references('idMail')->on('mail')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('dependency_id', 'mail_dependency_ibfk_2')->references('idDependency')->on('dependency')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mail_dependency', function(Blueprint $table)
		{
			$table->dropForeign('mail_dependency_ibfk_1');
			$table->dropForeign('mail_dependency_ibfk_2');
		});
	}

}
