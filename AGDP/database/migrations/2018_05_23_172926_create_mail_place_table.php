<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mail_place', function(Blueprint $table)
		{
			$table->integer('nMP', true);
			$table->integer('mail_id')->index('mail_id');
			$table->integer('place_id')->index('place_id');
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
		Schema::dropIfExists('mail_place');
	}

}
