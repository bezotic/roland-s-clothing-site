<?php

class OrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('orders.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orders.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = Order::find($id);

		if(is_null($order)){

			return $this->orderNotFound();
		}

		return View::make('orders.show',['order' => $order]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::find($id);
		return View::make('orders.edit')->with('order', $order);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$order = Order::find($id);
			if (is_null($order)) {
			App::abort(404);
			} else {
				return $this->validateAndSave($order);
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
		$order = Order::find($id);
		if(!$order) {
			Session::flash('errorMessage', "User not found");
			return Redirect::action('UserController@index');

		}

		$order->delete();
		Session::flash('successMessage', "Size has been deleted");

		return Redirect::action('UserController@index')

	}

	public function validateAndSave($order)
	{
		$validator = Validator::make(Input::all(), Order::$rules);

		  if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', "Unable to save, see errors");
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$order->total = Input::get('total');
			$order->save();
			
			Session::flash('successMessage', "Successfully saved!");
	}

	public function orderItemsNotFound(){

		return App::abort(404);
	}

	public function storeSession() {
	if (Session::has('order_id') && Order::find(Session::get('order_id')) != null) {
      	
      	$order = Order::find(Session::get('order_id'));
   
    } else {
      $order = new Order();
      $order->user_id = Auth::user()->id;
      $order->save();
      Session::put('order_id', $order->id);
    }

	}




}

}

