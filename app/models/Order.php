<?php

class Order extends BaseModel {
	
	protected $table = 'orders';



		public static $rules = [
						'total' => 'required',
						
						];

	public function user(){

		return $this->belongsTo('User');
	}

	
}

