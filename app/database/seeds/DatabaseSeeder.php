<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		DB::table('users')->delete();
		DB::table('inventories')->delete();
		DB::table('sizeDetails')->delete();
		DB::table('orders')->delete();
		DB::table('orderItems')->delete();
		
	

		$this->call('UserTableSeeder');
		$this->call('InventoryTableSeeder');
		$this->call('SizeDetailTableSeeder');
		$this->call('OrderTableSeeder');
		$this->call('OrderItemTableSeeder');
		
		
	
	
		

		
	}

}
