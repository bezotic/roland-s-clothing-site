<?php

class InventoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$inventory = Inventory::all();
		return View::make('inventories.index')->with('inventory', $inventory);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inventories.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inventory = new Inventory();
		Log::info(Input::all());
		return $this->validateAndSave($inventory);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$inventory = Inventory::find($id);

		if(is_null($inventory)){

			return $this->inventoryNotFound();
		}

		return View::make('inventories.show',['inventory' => $inventory]);
	}


	


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inventory = Inventory::find($id);
		return View::make('inventories.edit')->with('inventory', $inventory);
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inventory = Inventory::find($id);
			if (is_null($inventory)) {
			App::abort(404);
			} else {
				return $this->validateAndSave($inventory);
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
		$inventory = Inventory::find($id);
			if(!$inventory) {
			Session::flash('errorMessage', "User not found");
			return Redirect::action('UserController@index');

		}

		$inventory->delete();
		Session::flash('successMessage', "Size has been deleted");

		return Redirect::action('UserController@index');
	}

	public function validateAndSave()
	{
		$validator = Validator::make(Input::all(), Inventory::$rules);

		  if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$inventory->title = Input::get('title');
			$inventory->description = Input::get('description');
			$inventory->image = Input::get('image');
			$inventory->type = Input::get('type');
			$inventory->save();
			
			
			Session::flash('successMessage', "Successfully saved!");
	}


}

}
