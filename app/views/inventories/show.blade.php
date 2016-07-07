@extends('layouts.masters')

@section('top-script')
	
	<link rel='stylesheet' href='/js/chosen.css'>
@stop

@section('content')

<div class="container">
	<br>
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
	 </div>
{{ Form::open(['action' => 'SizeDetailController@validateAndPurchase', 'method'=>'POST', 'class'=>'form-horizontal']) }}	
	
	<div class='row'>
	 <div class="form-group">
	 	<div  class="col-md-4">
       <select class='size-details-dropdown btn btn-default'>
		  @foreach($inventory->size_details as $details)
		  <option value='size' name='size'>{{{$details->size}}} </option>
		  @endforeach
		</select>
	  
	   <div class="form-group">
		   <select class='size-details-dropdown btn btn-default'>
		  @foreach($inventory->size_details as $details)
		  <option value='price' name='price'>{{{$details->price}}}</option>
		  @endforeach
		</select>
		</div>
			<br>
			<br>
			<button type="submit" class="btn btn-default confirm-btn" name="save" value="save">Add To Bag</button>
		</div>

 	
	</div>
</div>
{{Form::close()}}
<?= var_dump($_POST)?>
@stop

@section('bottom-script')


@stop