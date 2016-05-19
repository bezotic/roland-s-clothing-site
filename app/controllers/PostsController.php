<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', array('except'=>array('index', 'show')));
		$this->beforeFilter('edit', array('only'=>array('edit')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::with('User')->paginate(4);	
		

		$search = Input::get('search');
		// creating conditional for search bar at the bottom
		if (is_null($search))
		{

			$posts = Post::with('User')->orderBy('created_at', 'desc')->paginate(4);

		} else {
		    $posts = Post::with('User')->where('title', 'LIKE', "%$search%")->orWhere('body', 'LIKE', "%.h%")->
			orderBy('created_at', 'asc')->paginate(4);
		}	
		return View::make('posts.posts')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		Log::info(Input::all());
		return $this->validateAndSave($post);
		
	    
		
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$post = Post::find($id);
		
		if (is_null($post)) {
			App::abort(404);
		}

		return View::make('posts.show', ['post'=>$post]);


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$post = Post::find($id);
		if (is_null($post)) {
			App::abort(404);
		}
		
		return View::make('posts.edit')->with('post', $post);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	
		$post = Post::find($id);
		if (is_null($post)) {
			App::abort(404);
		}

		return $this->validateAndSave($post);


		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', "The post was not found");
			return Redirect::action('PostsController@index');

		}

		$post->delete();
		Session::flash('successMessage', "The post was successfully deleted");

		return Redirect::action('PostsController@index');

	}

	public function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

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
			   	$post->image = "/image/{$image->getClientOriginalName()}";
			}
	        
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
			$post->user_id = Auth::id();
	
			$post->save();
			Session::flash('successMessage', "Post was successfully saved!");
			return Redirect::action('PostsController@index');
	    }
	}



	


}


