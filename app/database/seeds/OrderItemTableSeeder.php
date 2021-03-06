<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrderItemTableSeeder extends Seeder {

	public function run()
	{
		$orderItem = new OrderItem();
		$orderItem->order_id = Order::first()->id;
		$orderItem->inventory_id = Inventory::first()->id;
		$orderItem->sizeDetail_id = SizeDetail::first()->id;
		$orderItem->count = 1;
		$orderItem->cost = 22.00;
		$orderItem->save();


		$orderItem1 = new OrderItem();
		$orderItem1->order_id = 2;
		$orderItem1->inventory_id = Inventory::first()->id;
		$orderItem1->sizeDetail_id = SizeDetail::first()->id;
		$orderItem1->count = 1;
		$orderItem1->cost = 22.00;
		$orderItem1->save();
	}

}

