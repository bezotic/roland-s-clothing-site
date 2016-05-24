<?php

class OrderItem extends BaseModel {
	
	protected $table = 'orderItems';



	

	public function orders(){

		return $this->hasMany('Order');
	}
	



	
}