<?php

use Carbon\Carbon;

class Shirt extends BaseModel 
{

		public static $rules = array(
		   	'type' => 'required',
		   	'size' => 'required',
		   	'price'=> 'required'
		);
		protected $table = 'shirts';

		public function shirtItems()
		{
		    return $this->belongsTo('Orders');
		}


		public function isOwner($user)
		{
			return $this->user_id == $user->id;
		}



















}