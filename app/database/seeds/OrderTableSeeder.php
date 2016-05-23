<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder {

	public function run()
	{
		$order = new Order();
		$order->orderItem_id = OrderItem::first()->id;
		$order->total = 22.00;
		$order->save();
	}

}