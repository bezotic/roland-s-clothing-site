<?php

class ShirtsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		View::make('shirts.index');
	}

	public function show()
	{
		$shirt = Shirt::find($id);
		
		if (is_null($shirt)) {
			App::abort(404);
		}

		return View::make('shirts.show', ['shirt'=>$shirt]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shirts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$shirt = new Shirt();
		Log::info(Input::all());
		return $this->validateAndSave($shirt);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shirt = Shirt::find($id)

		if (is_null($shirt)) {
			App::abort(404);
		}

		return View::make('shirts.edit')->with('shirt', $shirt);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shirt = Shirt::find($id);
		if (is_null($shirt)) {
			App::abort(404);
		}

		return $this->validateAndSave($shirt);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$shirt = Shirt::find($id);

		if (is_null($shirt)) {
			Session::flash('errorMessage', 'The item was not found')
			return Redirect::action('ShirtsController@index');
		}

		$shirt->delete();
			Session::flash('sucessMessage', 'Item(s) successfully deleted!')
			return Redirect::action('ShirtsController@index');


	}


}
