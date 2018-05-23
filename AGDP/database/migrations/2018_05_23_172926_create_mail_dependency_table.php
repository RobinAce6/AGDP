<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailDependencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mail_dependency', function(Blueprint $table)
		{
			$table->integer('cMD', true);
			$table->integer('mail_id')->index('mail_id');
			$table->integer('dependency_id')->index('dependency_id');
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
		Schema::dropIfExists('mail_dependency');
	}

}
