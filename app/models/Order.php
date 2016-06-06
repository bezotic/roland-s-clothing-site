<?php

class Order extends BaseModel {
	
	protected $table = 'orders';



		public static $rules = [
						'total' => 'required',
						'address'=> 'required'
						
						];

	public function user(){

		return $this->belongsTo('User');
	}

	public function orderItems(){

		return $this->hasMany('OrderItem');
	}

	
}

