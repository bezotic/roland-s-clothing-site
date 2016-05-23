<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SizeDetailTableSeeder extends Seeder {

	public function run()
	{
		$sizeDetail = new SizeDetail();
		$sizeDetail->inventory_id = Inventory::first()->id;
		$sizeDetail->size = 'sm';
		$sizeDetail->amount = 20;
		$sizeDetail->cost = 22.00;
		$sizeDetail->save();
	}

}

