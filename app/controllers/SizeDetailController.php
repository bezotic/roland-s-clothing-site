<?php

class SizeDetailController extends BaseController 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('sizeDetails.index');
	}

	public function showAdminSizeDetails()
	{

		$b = SizeDetail::all();

		$data = ['sizeDetail' => $b];

		return View::make('admin.adminSizeDetails')->with($data);;
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
		return $this->validateAndSave($sizeDetails);
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
			Session::flash('errorMessage', "Item not found");
			return Redirect::action('UserController@index');

		}

		$sizeDetails->delete();
		Session::flash('successMessage', "Item has been deleted");

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
	      	var_dump($_POST);
			$sizeDetails->size = Input::get('size');
			$sizeDetails->amount = Input::get('amount');
			$sizeDetails->color = Input::get('color');
			$sizeDetails->price = Input::get('price');
			$sizeDetails->save();
			
			Session::flash('successMessage', "Successfully saved!");
		    }
    }

    public function validateAndPurchase()
	{
		
		$validator = Validator::make(Input::all(), SizeDetail::$purchase);

		  if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	        var_dump($_POST);
	      } else {
	      	$sizeDetails = new SizeDetail;
			$sizeDetails->size = Input::get('size');
			$sizeDetails->save();
			
			
			Session::flash('successMessage', "Successfully saved!");
		    }
    }

	

}
