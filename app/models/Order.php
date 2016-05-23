<?php

class Order extends BaseModel {
	
	protected $table = 'orders';



	public function user(){

		return $this->belongsTo('User');
	}

	public function orderItems()
	{
		return $this->hasMany('OrderItem');
	}
}

