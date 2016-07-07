<?php

class UserController extends \BaseController 
{

		
	
	public function index()
	{
		return View::make('users.index');
	}

	public function showLogin()
	{
		return View::make('users.login');
	}

	public function showAdminSizeDetails()
	{
		return View::make('admin.adminSizeDetails');
	}

	
	public function doLogin()
	{
	// validate the info, create rules for the inputs
	$rules = array(
	    'email'    => 'required|email', // make sure the email is an actual email
	    'password' => 'required|min:3' 
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
	       return Redirect::action('UserController@index');

	    } else {        

	        // validation not successful, send back to form 
	        return Redirect::to('UserController@create');

	    }

	  }
	}
		

	public function logout()
	{
		Auth::logout();
		return Redirect::action('UserController@index');
	}

	public function store() {
		$user = new User();
		Log::info(Input::all());
		return $this->validateAndSave($user);
	}


	public function showAdminInventory() {
		return View::make('admin.adminInventory');
	}

	public function storeAdminInventory()
	{
		$inventory = new Inventory();

		return $this->validateAndSaveInventory($inventory);
		
	}


	private function validateAndSaveInventory($inventory){

		// create the validator
	    $validator = Validator::make(Input::all(), Inventory::$rules);

	    // attempt validation
	    if ($validator->fails()) {

	       Session::flash('errorMessage',"Unable to save inventory entry.");	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
			$inventory->title = Input::get('title');

			$inventory->description = Input::get('description');

			$inventory->description = Input::get('image');

			$inventory->type = Input::get('type');

			$inventory->save();
			
			
			Session::flash('successMessage',"New inventory was added successfully.");

			Log::info('Log message', array('title' => $inventory->title, 'description' => $inventory->description, 'type' => $inventory->type));
			
			return Redirect::action('UserController@index');
	    }

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

		}

		$user->delete();
		Session::flash('successMessage', "Your Account has been deleted");

		return Redirect::action('UserController@index');

	}


	public function validateAndSave (){
		
	    $validator = Validator::make(Input::all(), User::$newUserRules);

	    if ($validator->fails()) {

	       Session::flash('errorMessage','All fields must be filled in.');	

	       return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	      
	      	$user = new User();

			$user->first_name = Input::get('first_name');

			$user->last_name = Input::get('last_name');

			$user->email = Input::get('email');

			$user->city = Input::get('city');

			$user->state = Input::get('state');

			$user->address = Input::get('address');

			//hashing where?
			$password1 = Input::get('password');

			$password2 = Input::get('password_confirm');
			

	

				$user->password = $password1;

				$result = $user->save();

				

				if($result) {
					$loggedIn = Auth::attempt([
						'email' => Input::get('email'),
						'password' => Input::get('password')]);
					}
					if($loggedIn) {
						Session::flash('successMessage','Account creation successful. Thank you.');
						return Redirect::action('UserController@index', $user->id);
					} else {
						Session::flash('errorMessage','unsuccessful.');
					}


				

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
		$validator = Validator::make(Input::all(), User::$changePasswordRules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

			$user->password = Input::get('password');
			$user->save();
			Session::flash('successMessage', "password was successfully saved!");
			return Redirect::action('UserController@index');
	    }
	}

	public function showAbout()
	{
		return View::make('users.about');

	}

	public function show($id)
	{
		
		$user = User::find($id);

		if(is_null($user)){

			return $this->userNotFound();
		}

		return View::make('users.show',['user' => $user]);
	}


	



}