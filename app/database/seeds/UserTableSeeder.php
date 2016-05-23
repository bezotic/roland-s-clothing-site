<?php



class UserTableSeeder extends Seeder{


	public function run(){
		
		$user = new User();
		$user->first_name = 'Richard';
		$user->last_name = 'De Los Santos';
		$user->email = 'RichardDeLosSantos1292@gmail.com';
		$user->password = 'DeLosSantos0712';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->address = '424 Balboa Ave';
		$user->role_id = 1;	
		$user->save();


		$user1 = new User();
		$user1->first_name = 'Don';
		$user1->last_name = 'Moore';
		$user1->email = 'donmoore26762671@gmail.com';
		$user1->password = 'don';
		$user1->city = 'San Antonio';
		$user1->state = 'TX';
		$user1->address = '8019 Manderly Place Converse, TX 78109';
		$user1->role_id = 1;	
		$user1->save();
		

	}

}