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
		$sizeDetail->color = 'blue';
		$sizeDetail->save();

		$sizeDetail1 = new SizeDetail();
		$sizeDetail1->inventory_id = Inventory::first()->id;
		$sizeDetail1->size = 'm';
		$sizeDetail1->amount = 20;
		$sizeDetail1->color = 'blue';
		$sizeDetail1->save();

		$sizeDetail2 = new SizeDetail();
		$sizeDetail2->inventory_id = Inventory::first()->id;
		$sizeDetail2->size = 'lg';
		$sizeDetail2->amount = 20;
		$sizeDetail2->color = 'blue';
		$sizeDetail2->save();

		$sizeDetail3 = new SizeDetail();
		$sizeDetail3->inventory_id = Inventory::first()->id;
		$sizeDetail3->size = 'xl';
		$sizeDetail3->amount = 20;
		$sizeDetail3->color = 'blue';
		$sizeDetail3->save();

		$sizeDetail4 = new SizeDetail();
		$sizeDetail4->inventory_id = Inventory::first()->id;
		$sizeDetail4->size = 'xxl';
		$sizeDetail4->amount = 20;
		$sizeDetail4->color = 'blue';
		$sizeDetail4->save();

		// inventory id 2
		$sizeDetail5 = new SizeDetail();
		$sizeDetail5->inventory_id = 2;
		$sizeDetail5->size = 'sm';
		$sizeDetail5->amount = 20;
		$sizeDetail5->color = 'blue';
		$sizeDetail5->save();

		$sizeDetail6 = new SizeDetail();
		$sizeDetail6->inventory_id = 2;
		$sizeDetail6->size = 'm';
		$sizeDetail6->amount = 20;
		$sizeDetail6->color = 'blue';
		$sizeDetail6->save();

		$sizeDetail7 = new SizeDetail();
		$sizeDetail7->inventory_id = 2;
		$sizeDetail7->size = 'lg';
		$sizeDetail7->amount = 20;
		$sizeDetail7->color = 'blue';
		$sizeDetail7->save();

		$sizeDetail8 = new SizeDetail();
		$sizeDetail8->inventory_id = 2;
		$sizeDetail8->size = 'xl';
		$sizeDetail8->amount = 20;
		$sizeDetail8->color = 'blue';
		$sizeDetail8->save();

		$sizeDetail9 = new SizeDetail();
		$sizeDetail9->inventory_id = 2;
		$sizeDetail9->size = 'xxl';
		$sizeDetail9->amount = 20;
		$sizeDetail9->color = 'blue';
		$sizeDetail9->save();

		//inventory id 3
		$sizeDetail10 = new SizeDetail();
		$sizeDetail10->inventory_id = 3;
		$sizeDetail10->size = 'sm';
		$sizeDetail10->amount = 20;
		$sizeDetail10->color = 'blue';
		$sizeDetail10->save();

		$sizeDetail11 = new SizeDetail();
		$sizeDetail11->inventory_id = 3;
		$sizeDetail11->size = 'm';
		$sizeDetail11->amount = 20;
		$sizeDetail11->color = 'blue';
		$sizeDetail11->save();

		$sizeDetail12 = new SizeDetail();
		$sizeDetail12->inventory_id = 3;
		$sizeDetail12->size = 'lg';
		$sizeDetail12->amount = 20;
		$sizeDetail12->color = 'blue';
		$sizeDetail12->save();

		$sizeDetail13 = new SizeDetail();
		$sizeDetail13->inventory_id = 3;
		$sizeDetail13->size = 'xl';
		$sizeDetail13->amount = 20;
		$sizeDetail13->color = 'blue';
		$sizeDetail13->save();

		$sizeDetail14 = new SizeDetail();
		$sizeDetail14->inventory_id = 3;
		$sizeDetail14->size = 'xxl';
		$sizeDetail14->amount = 20;
		$sizeDetail14->color = 'blue';
		$sizeDetail14->save();
		//inventory id 4
		
		$sizeDetail15 = new SizeDetail();
		$sizeDetail15->inventory_id = 4;
		$sizeDetail15->size = 'sm';
		$sizeDetail15->amount = 20;
		$sizeDetail15->color = 'blue';
		$sizeDetail15->save();

		$sizeDetail16 = new SizeDetail();
		$sizeDetail16->inventory_id = 4;
		$sizeDetail16->size = 'm';
		$sizeDetail16->amount = 20;
		$sizeDetail16->color = 'blue';
		$sizeDetail16->save();

		$sizeDetail17 = new SizeDetail();
		$sizeDetail17->inventory_id = 4;
		$sizeDetail17->size = 'lg';
		$sizeDetail17->amount = 20;
		$sizeDetail17->color = 'blue';
		$sizeDetail17->save();

		$sizeDetail18 = new SizeDetail();
		$sizeDetail18->inventory_id = 4;
		$sizeDetail18->size = 'xl';
		$sizeDetail18->amount = 20;
		$sizeDetail18->color = 'blue';
		$sizeDetail18->save();

		$sizeDetail19 = new SizeDetail();
		$sizeDetail19->inventory_id = 4;
		$sizeDetail19->size = 'xxl';
		$sizeDetail19->amount = 20;
		$sizeDetail19->color = 'blue';
		$sizeDetail19->save();

		//inventory id 5

		$sizeDetail20 = new SizeDetail();
		$sizeDetail20->inventory_id = 5;
		$sizeDetail20->size = 'sm';
		$sizeDetail20->amount = 20;
		$sizeDetail20->color = 'blue';
		$sizeDetail20->save();

		$sizeDetail21 = new SizeDetail();
		$sizeDetail21->inventory_id = 5;
		$sizeDetail21->size = 'sm';
		$sizeDetail21->amount = 20;
		$sizeDetail21->color = 'blue';
		$sizeDetail21->save();

		$sizeDetail22 = new SizeDetail();
		$sizeDetail22->inventory_id = 5;
		$sizeDetail22->size = 'sm';
		$sizeDetail22->amount = 20;
		$sizeDetail22->color = 'blue';
		$sizeDetail22->save();

		$sizeDetail23 = new SizeDetail();
		$sizeDetail23->inventory_id = 5;
		$sizeDetail23->size = 'sm';
		$sizeDetail23->amount = 20;
		$sizeDetail23->color = 'blue';
		$sizeDetail23->save();

		$sizeDetail24 = new SizeDetail();
		$sizeDetail24->inventory_id = 5;
		$sizeDetail24->size = 'sm';
		$sizeDetail24->amount = 20;
		$sizeDetail24->color = 'blue';
		$sizeDetail24->save();


	}

}

