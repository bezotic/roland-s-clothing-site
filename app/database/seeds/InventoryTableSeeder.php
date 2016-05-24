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

		$inventory1 = new Inventory();
		$inventory1->title = 'long sleeve shirt';
		$inventory1->description = 'Perfect for cold weather';
		$inventory1->image = 'http://placehold.it/160x160';
		$inventory1->type = 'long sleeve';
		$inventory1->save();

		$inventory2 = new Inventory();
		$inventory2->title = 'sweater';
		$inventory2->description = 'Perfect for cold weather';
		$inventory2->image = 'http://placehold.it/160x160';
		$inventory2->type = 'sweater';
		$inventory2->save();

		$inventory3 = new Inventory();
		$inventory3->title = 'tank top';
		$inventory3->description = 'Just in time for summer';
		$inventory3->image = 'http://placehold.it/160x160';
		$inventory3->type = 'tank top';
		$inventory3->save();

		$inventory4 = new Inventory();
		$inventory4->title = 'hoodie';
		$inventory4->description = 'great for cold weather or april showers';
		$inventory4->image = 'http://placehold.it/160x160';
		$inventory4->type = 'hoodie';
		$inventory4->save();

	}

}

