<?php

class SizeDetail extends BaseModel {
	

	protected $table = 'sizeDetails';

	 public static $rules = array(
	    'size'     => 'required',
	    'amount'   => 'required',
	    'cost'	   => 'required'	
	);

	 public function orderItems()
	 {
	 	return $this->hasMany('OrderItem');
	 }

	 





}