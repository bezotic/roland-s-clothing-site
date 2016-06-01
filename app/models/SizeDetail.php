<?php

class SizeDetail extends BaseModel {
	

	protected $table = 'sizeDetails';

	 public static $rules = array(
	    'size'     => 'required',
	    'amount'   => 'required',
	    'color'    => 'required'
	    	
	);

	 public function orderItems()
	 {
	 	return $this->hasMany('OrderItem');
	 }

	 public function inventory()
	 {
	 	return $this->belongsTo('Inventory');
	 }







}