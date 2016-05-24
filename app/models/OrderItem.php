<?php

class OrderItem extends BaseModel {
	
	protected $table = 'orderItems';



	public static $rules = [
						'count' => 'required',
						'cost'  => 'required'
						];

	
	public function orders(){

		return $this->hasMany('Order');
	}
	



	
}