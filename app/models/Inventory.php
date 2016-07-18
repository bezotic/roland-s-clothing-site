<?php

class Inventory extends BaseModel {
	
	protected $table = 'inventories';


	public static $rules = [
						'title' => 'required',
						'description' => 'required',
						'image' => 'required',
						'type' => 'required',
						
						];


	public function sizeDetails()
	{
		return $this->hasMany('SizeDetail');
	}


	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}



}