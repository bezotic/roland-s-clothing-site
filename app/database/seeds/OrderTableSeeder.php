<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder {

	public function run()
	{
		$order = new Order();
		$order->user_id = User::first()->id;
		$order->address = '424 Balboa Ave';
		$order->zipcode = 78237;
		$order->state = "TX";
		$order->total = 22.00;
		$order->save();
	}

}