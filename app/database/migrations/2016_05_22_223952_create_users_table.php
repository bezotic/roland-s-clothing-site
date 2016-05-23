<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email', 255);
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('city', 50);
			$table->string('state', 50);
			$table->string('address', 255);
			$table->string('password', 255);
			$table->integer('role_id')->unsigned();
			$table->timestamps();
			$table->rememberToken();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
