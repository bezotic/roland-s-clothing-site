<?php

class OrderItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 *@return Response
	 */
	public function index()
	{
		return View::make('orderItems.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderItems.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$orderItems = new OrderItem();
		Log::info(Input::all());
		return $this->validateAndSave($orderItems);
	}


	private function orderItemsNotFound(){

		return App::abort(404);
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
		$orderItems = OrderItem::find($id);
			return View::make('orderItems.edit')->with('orderItem', $orderItems);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderItems = OrderItem::find($id);
			if (is_null($orderItems)) {
			App::abort(404);
			} else {
				return $this->validateAndSave($orderItems);
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
		$orderItems = OrderItem::find($id);
		if(!$orderItems) {
			Session::flash('errorMessage', "Item not found");
			return Redirect::action('UserController@index');

		}

		$orderItems->delete();
		Session::flash('successMessage', "Item has been deleted");

		return Redirect::action('UserController@index');

	}

	public function validateAndSave($orderItem)
	{
		$validator = Validator::make(Input::all(), OrderItem::$rules);

		  if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

	    	$orderItem->inventory_id = Input::get('inventory_id');

	    	$orderItem->sizeDetail_id = Input::get('sizeDetail_id');

	    	$count = Input::get('count');

	    	$cost = Input::get('cost');

	    	if($count < $sizeDetail->amount){
	    		$orderItem->count = Input::get('count');

	    	}else{
	    		  Session::flash('errorMessage', "You have ordered more items than we have in stock. Lower purchase amount.");
	    		  return Redirect::action('InventoryController@show');

	    	}
			
			$count * $cost = $total;

			$orderItem->cost = Input::get('cost');

			$orderItem->save();

			$data = ['orderItem' => $orderItem];
			
			Session::flash('successMessage', "Successfully saved!");

			return View::make('orderItems.index')->with($data);

		}

	}

	

	public function createOrderItem() {

		$orderItem = new OrderItem ();

		return $this->validateAndSave($orderItem);


	}

}
