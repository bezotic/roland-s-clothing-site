<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	const ADMIN = 1;
	const STANDARD = 2;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static $loginRules =  ['password'=>'required'];

	public static $rules = ['first_name'=>'required',
							'last_name'=>'required',
							'email'=>'required|email',
							'city' => 'required',
							'state'=> 'required',
							'address'=>'required'
							];


	public static $changePasswordRules = array(

	    'password'  => 'required|confirmed',
	    
	    

	);
	

	

	public function order()
	{
		return $this->hasMany('Order');
	}

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function isStandard()
	{
		return $this->role_id == User::STANDARD;
	}

	public function isAdmin()
	{
		return $this->role_id == User::ADMIN;
	}

}



