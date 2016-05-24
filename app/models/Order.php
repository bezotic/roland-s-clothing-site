<?php

class Order extends BaseModel {
	
	protected $table = 'orders';



		public function $rules = [
						'total' => 'required',
						
						];

	public function user(){

		return $this->belongsTo('User');
	}

	
}

