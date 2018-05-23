<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEdocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edoc', function(Blueprint $table)
		{
			$table->integer('idEDoc', true);
			$table->string('nameEDoc', 50)->unique('nameEDoc');
			$table->integer('mail_id')->index('edoc_mail');
			$table->integer('folder_id')->index('edoc_folder');
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
		Schema::dropIfExists('edoc');
	}

}
