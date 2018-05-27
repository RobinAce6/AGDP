<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mail', function(Blueprint $table)
		{
			$table->integer('idMail', true);
			$table->char('idMail2', 3);
			$table->char('codEnterprise', 2);
			$table->string('affair', 200);
			$table->date('creationDate')->nullable();
			$table->date('internalEstablishmentDate')->nullable();
			$table->date('receivedDate')->nullable();
			$table->string('observations', 125)->nullable();
			$table->boolean('deliveredToArchive');
			$table->string('shippingWay', 30);
			$table->string('nameMsessenger', 50);
			$table->boolean('typeMail')->nullable();
			$table->integer('dependency_id');
			$table->integer('storagew_id');
			$table->integer('city_id');
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
		Schema::dropIfExists('mail');
	}

}
