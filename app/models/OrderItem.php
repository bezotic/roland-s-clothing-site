<?php

class OrderItem extends BaseModel {
	
	protected $table = 'orderItems';



	public static $rules = [

						'order_id' => 'required',
						'inventory_id' => 'required',
						'sizeDetail_id' => 'required',
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