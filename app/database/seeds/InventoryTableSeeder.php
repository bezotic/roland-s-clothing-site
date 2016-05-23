<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InventoryTableSeeder extends Seeder {

	public function run()
	{
		$inventory = new Inventory();
		$inventory->title = 'short sleeve shirt';
		$inventory->description = 'Perfect for cold weather';
		$inventory->image = 'http://placehold.it/160x160';
		$inventory->type = 'short sleeve';
		$inventory->save();

	}

}

