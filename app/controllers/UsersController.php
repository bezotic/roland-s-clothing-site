<?php

class UserController extends \BaseController 
{

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('doLogin', 'showLogin', 'logout', 'create', 'store', 'showAbout')));
	}
	


	public function showLogin()
	{
		return View::make('users.login');
	}

	
	public function doLogin()
	{
	// validate the info, create rules for the inputs
	$rules = array(
	    'email'    => 'required|email', // make sure the email is an actual email
	    'password' => 'required|min:8' 
	);

	// run the validation rules on the inputs from the form
	$validator = Validator::make(Input::all(), $rules);

	// if the validator fails, redirect back to the form
	if ($validator->fails()) {
	    return Redirect::to('login')
	        ->withErrors($validator) // send back all errors to the login form
	        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	} else {

	    // create our user data for the authentication
	    $userdata = array(
	        'email'     => Input::get('email'),
	        'password'  => Input::get('password')
	    );

	    // attempt to do the login
	    if (Auth::attempt($userdata)) {

	        // validation successful!
	        // redirect them to the secure section or whatever
	        // return Redirect::to('secure');
	        // for now we'll just echo success (even though echoing in a controller is bad)
	       return Redirect::action('PostsController@create');

	    } else {        

	        // validation not successful, send back to form 
	        return Redirect::to('posts.posts');

	    }

	}
	}
		
	


	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function store() {
		$user = new User();
		Log::info(Input::all());
		return $this->validateAndSave($user);
	}

	public function create() {
		return View::make('users.create');
	}

	public function edit($id) {
		$user = User::find($id);
			return View::make('users.edit')->with('user', $user);
	}

	public function update($id)
	{
		$user = User::find($id);
		if (is_null($user)) {
			App::abort(404);
		} else {
			return $this->validateAndSave($user);
		}
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$post = Post::find($id);
		if(!$user) {
			Session::flash('errorMessage', "User not found ");
			return Redirect::action('PostsController@index');

		}

		$user->delete();
		Session::flash('successMessage', "Your Account has been deleted");

		return Redirect::action('PostsController@index');

	}


	public function validateAndSave($user)
	{
		$validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

	    	if (Input::hasFile('image'))
			{
			    $image = Input::file('image');
			   	$image->move(
			   		public_path('/image'),
			   	$image->getClientOriginalName()
			   	);
			   	$user->image = "/image/{$image->getClientOriginalName()}";
			}
	        if (Input::has('password')){
	        	$user->password = Input::get('password');

	        }
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->address = Input::get('address');x
			$user->save();
			Session::flash('successMessage', "user was successfully saved!");
			return Redirect::action('PostsController@index');
	    }
	}

	public function editPassword($id) {
		$user = User::find($id);
			return View::make('users.editPassword')->with('user', $user);
	}

	public function updatePassword($id)
	{
		$user = User::find($id);
		if (is_null($user)) {
			App::abort(404);
		} else {
			return $this->validateAndSavePassword($user);
		}
	}


	public function validateAndSavePassword($user)
	{
		$validator = Validator::make(Input::all(), User::$loginRules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

			$user->password = Input::get('password');
			$user->save();
			Session::flash('successMessage', "password was successfully saved!");
			return Redirect::action('PostsController@index');
	    }
	}

	public function showAbout()
	{
		return View::make('users.about');

	}

	



}