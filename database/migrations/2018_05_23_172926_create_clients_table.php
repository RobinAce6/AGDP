<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->integer('idClient', true);
<<<<<<< HEAD:AGDP/database/migrations/2018_05_23_172926_create_clients_table.php
			$table->string('nitClient', 50);
			$table->string('nameClient', 50);
			$table->string('personClient', 50);
			$table->string('addressClient', 50);
=======
			$table->string('nitClient', 50)->unique();
			$table->string('nameClient', 50)->unique();
			$table->string('personClient', 50);
			$table->string('addressClient', 50)->unique();
			$table->boolean('typeClient');
>>>>>>> origin:database/migrations/2018_05_23_172926_create_clients_table.php
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
		Schema::dropIfExists('clients');
	}

}
