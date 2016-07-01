<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
		{
			$table->increments('id');
			$table->string('body');
			$table->string('description');
			$table->string('title', 100);
			$table->string('image');
			$table->string('size',8);
			$table->integer('amount');
			$table->string('color');
			$table->float('cost');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}