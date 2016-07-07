<?php

class Inventory extends BaseModel {
	
	protected $table = 'inventories';


	public static $rules = [
						'title' => 'required',
						'description' => 'required',
						'image' => 'required',
						'type' => 'required',
						'price' => 'required'
						
						];


	public function sizeDetails()
	{
		return $this->hasMany('SizeDetail');
	}





}