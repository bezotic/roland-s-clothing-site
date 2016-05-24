<?php

class Inventory extends BaseModel {
	
	protected $table = 'inventories';


	public function sizeDetails()
	{
		return $this->hasMany('SizeDetail');
	}





}