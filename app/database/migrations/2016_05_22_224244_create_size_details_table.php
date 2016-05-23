<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizeDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('sizeDetails',function($table)
		{
			$table->increments('id');
			$table->integer('inventory_id')->unsigned();
			$table->foreign('inventory_id')->references('id')->on('inventories');
			$table->string('size',8);
			$table->integer('amount');
			$table->float('cost');
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
		Schema::drop('sizeDetails');
	}

}
