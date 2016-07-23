@extends('layouts.masters')

@section('top-script')
	
	<link rel='stylesheet' href='/js/chosen.css'>
	<style>
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

	<?php $count = [0,1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,0] ?>

	@foreach($count as $num)

		

	@endforeach

	
	@foreach($inventory->size_details as $details)

		

	@endforeach

	<?php $total = Input::get('count') * Input::get('cost');?>



	@foreach($inventory->order_items as $item)
		

	@endforeach
	

	 	
	{{ Form::open(array('action' => array('OrderItemController@createOrderItem',Order::first()->id,$inventory->id,$details->size,$details->price,$details->color,$total,$num)))}}	
	
	<div class='row'>
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


				<select class='size-details-dropdown btn btn-default' name='count' default='0'>
					@foreach($count as $num)
					<option name='count'>{{$num}} </option>
					@endforeach
				</select>

				<select class='size-details-dropdown btn btn-default' name='cost'>
					@foreach($inventory->size_details as $details)
					<option name='cost'>{{$details->price}} </option>
					@endforeach
				</select>
					
				<br>

				<?php $colors = ['red','orange', 'yellow', 'green','blue','indigo','violet'] ?>

				<select class='size-details-dropdown btn btn-default' name='color'>
					@foreach($inventory->size_details as $details)
					<option name='color'>{{$details->color}} </option>
					@endforeach
				</select>

				<br>


				<div class="form-group">
					<button type="submit" class="btn btn-default confirm-btn" name="save" value="save">Add To Bag</button>
				</div>


			</div>
			

		</div>

</div>
<div>
	<?php var_dump('order_id hardcoded until userid' . Order::first()->id)?>
	<?php var_dump('inventory_id  ' . $inventory->id)?>
	<?php var_dump('size with inv_id fulfills rules for order_item  ' . $details->size)?>
	<?php var_dump('price, price x count = total  ' . $details->price)?>
	<?php var_dump('color  ' . $details->color)?>
	<?php var_dump('total  ' . $total)?>
	<?php var_dump('num is my count for figuring total  '. $num)?>

	<?php var_dump(Input::get('inventory_id'))?>
	<?php var_dump(Input::get('sizeDetail_id'))?>
	<?php var_dump(Input::get('count'))?>
	<?php var_dump(Input::get('cost'))?>
	<?php var_dump(Input::get('color'))?>
</div>


{{Form::close()}}

@stop

@section('bottom-script')


@stop