<?php

class OrderItem extends BaseModel {
	
	protected $table = 'orderItems';



	public static $rules = [
						'count' => 'required',
						'cost'  => 'required'
						];

	
	public function order(){

		return $this->belongsTo('Order');
	}
	

	public function totalOrder()
	{
		
	}

	
}