<?php

use Carbon\Carbon;

class Order extends BaseModel 
{

		
		protected $table = 'order';
		public $timestamps = false;

		public function orderItems()
		{
			return $this->hasMany('orderItems');
		}

