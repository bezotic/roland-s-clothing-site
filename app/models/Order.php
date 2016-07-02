<?php

class Order extends BaseModel {
	
	protected $table = 'orders';



		public static $rules = [
						'total' => 'required',
						'address' => 'required',
						'zipcode' => 'required',
						'state' => 'required',
						
						];

	public function user(){

		return $this->belongsTo('User');
	}

	public function orderItems(){

		return $this->hasMany('OrderItem');
	}

	
}

