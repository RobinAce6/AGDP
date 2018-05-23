<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('idUser', true);
			$table->integer('codPerson');
			$table->string('namePerson', 50);
			$table->string('lastnamePerson', 50);
			$table->string('emailPerson', 45)->unique('emailPerson');
			$table->integer('typePerson_id')->index('per_typ');
			$table->integer('dependency_id')->index('per_dep');
			$table->string('userPerson', 45);
			$table->char('passwordPerson', 15);
			$table->char('confirPassPerson', 15);
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
		Schema::dropIfExists('users');
	}

}
