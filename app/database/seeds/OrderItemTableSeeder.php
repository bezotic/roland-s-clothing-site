<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrderItemTableSeeder extends Seeder {

	public function run()
	{
		$orderItem = new OrderItem();
		$orderItem->user_id = User::first()->id;
		$orderItem->sizeDetail_id = SizeDetail::first()->id;
		$orderItem->count = 1;
		$orderItem->save();
	}

}

