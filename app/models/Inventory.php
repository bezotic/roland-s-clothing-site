<?php

class Inventory extends BaseModel {
	
	protected $table = 'inventories';


	public function $rules = [
						'title' => 'required',
						'description' => 'required',
						'image' => 'required',
						'type' => 'required'
						
						];


	public function sizeDetails()
	{
		return $this->hasMany('SizeDetail');
	}





}