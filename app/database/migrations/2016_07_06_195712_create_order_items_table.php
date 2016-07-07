<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('orderItems',function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('inventory_id')->unsigned();
			$table->integer('sizeDetail_id')->unsigned();
			$table->foreign('sizeDetail_id')->references('id')->on('sizeDetails');
			$table->integer('count');
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
		Schema::drop('orderItems');
	}

}
