@extends('layouts.masters')

@section('top-script')
	
	<link rel='stylesheet' href='/js/chosen.css'>
	<style>

		.inventory_id {
			display:none;
		}


	.col-md-4{
		display: flex;
		flex-direction: column;
		align-items: ce;
	}

	</style>
@stop

@section('content')

<div class="container">
	
	<br>
	<br>
	<br>
	<br>
	<div class="content-wrapper-left">
		<div id="image-container col-md-6" class="product-images">
			<img class="img-responsive show-images" src="{{{$inventory->image}}}">
		
		</div>
	</div>
	 <div class='col-md-4'>
		<div class="product-details">
			<h1>{{{$inventory->type}}}</h1>
		</div>

	 	<br>
						

		{{ Form::open(['action' => 'OrderItemController@createOrderItem', 'method'=>'POST', 'class'=>'form-horizontal']) }}	
	
	<div class='row'>

	 <div class="form-group">
	 	<div  class="col-md-4">

		<select class='size-details-dropdown btn btn-default' name='id'>
		  <option name='id'>{{$inventory->id}} </option>

	 	<div class="form-group">
	 		<div  class="col-md-4">
		 		
		 		
				{{Form::textarea('order_id',Order::first()->id,['class'=> 'noneditable', 'rows' => '1', 'cols' => '20', 'disabled' => 'disabled'])}} 


				<select class='size-details-dropdown btn btn-default' name='inventory_id'>
				  	<option name='inventory_id'>{{$inventory->id}} </option>
				</select>

		       <select class='size-details-dropdown btn btn-default' name='size'>
					  @foreach($inventory->size_details as $details)
					  <option name='sizeDetail_id'>{{$details->size}} </option>
					  @endforeach
				</select>

				<br>
				<br>

				{{ Form::select('count', [1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20], null, ['class' => 'field']) }}
			
				
				<select class='size-details-dropdown btn btn-default' name='cost'>
					  @foreach($inventory->size_details as $details)
					  <option name='cost'>{{$details->price}} </option>
					  @endforeach
				</select>
				
					<br>
					<br>

				<div class="form-group">
					<button type="submit" class="btn btn-default confirm-btn" name="save" value="save">Add To Bag</button>
				</div>
				<?php var_dump(Order::first()->id)?>
		 		<?php var_dump($inventory->id)?>
		 		<?php var_dump($details->size)?>
		 		<?php var_dump('count')?>
		 		<?php var_dump($details->price)?>


		{{ Form::select('count', [1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20], null, ['class' => 'size-details-dropdown btn btn-default']) }}
	
		
		<select class='size-details-dropdown btn btn-default' name='cost'>
		  @foreach($inventory->size_details as $details)
		  <option name='cost'>{{$details->price}} </option>
		  @endforeach
		</select>
		
			<br>
			<br>
			<div class="form-group">
			<button type="submit" class="btn btn-default confirm-btn" name="save" value="save">Add To Bag</button>

			</div>
		</div>

</div>



{{Form::close()}}

@stop

@section('bottom-script')


@stop