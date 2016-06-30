<?php

class Post extends BaseModel {
	
	protected $table = 'posts';



	public static $rules = [
						
						];

	
	public function user()
	{
		return $this->belongsTo('User');
	}

	
}