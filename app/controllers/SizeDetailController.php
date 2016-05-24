<?php

class SizeDetailController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('sizeDetails.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sizeDetails.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$sizeDetails = new SizeDetail();
		Log::info(Input::all());
		return $this->validateAndSave($user);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$sizeDetails = SizeDetail::find($id);

		if(is_null($sizeDetails)){

			return $this->sizeDetailsNotFound();
		}

		return View::make('sizeDetails.show',['sizeDetail' => $sizeDetails]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sizeDetails = SizeDetail::find($id);
			return View::make('sizeDetails.edit')->with('sizeDetail', $sizeDetails);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sizeDetails = SizeDetail::find($id);
			if (is_null($sizeDetails)) {
			App::abort(404);
			} else {
				return $this->validateAndSave($sizeDetails);
			}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sizeDetails = SizeDetail::find($id);
		if(!$sizeDetails) {
			Session::flash('errorMessage', "User not found");
			return Redirect::action('UserController@index');

		}

		$sizeDetails->delete();
		Session::flash('successMessage', "Size has been deleted");

		return Redirect::action('UserController@index');

	}

	public function validateAndSave($sizeDetails)
	{
		$validator = Validator::make(Input::all(), SizeDetail::$rules);

		  if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$sizeDetail->size = 'sm';
			$sizeDetail->amount = 20;
			$sizeDetail->save();
			
			Session::flash('successMessage', "Successfully saved!");
	}

	private function sizeDetailsNotFound(){

		return App::abort(404);
	}




}
