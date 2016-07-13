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
		
		$sizeDetails = SizeDetail::findOrFail($id);
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
	       
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	        
	      } else {


	      	$sizeDetails->size = Input::get('inventory_id');
			$sizeDetails->size = Input::get('size');
			$sizeDetails->amount = Input::get('amount');
			$sizeDetails->color = Input::get('color');
			$sizeDetails->price = Input::get('price');
			$sizeDetails->save();
			
			Session::flash('successMessage', "Successfully saved!");
			return Redirect::action('SizeDetailController@showAdminSizeDetails');
		    }
    }

    public function validateAndPurchase()
	{
		if(Session::has('size_details_id') && SizeDetails::find(Session::get('size_details_id')) !=null) {
			$size_details = SizeDetail::find(Session::get('size_details_id'));
		} else {
			$size_details = new SizeDetail;
			$size_details->inventory_id = Session::get('inventory_id');
			$size_details->save();
		}
		
    }


	

}
