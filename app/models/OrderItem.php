<?php

class OrderItem extends BaseModel {
	
	protected $table = 'orderItems';



	public function user(){

		return $this->belongsTo('User');
	}

	public function orders(){

		return $this->hasMany('Order');
	}
	



	
}