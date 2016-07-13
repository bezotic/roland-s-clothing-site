@extends('layouts.masters')

@section('top-script')

@stop

@section('content')



	<div class="container">
		<div>
			<p class="inventory-title1">UNISEX</p>
			<div class="inventory-title2">
				<p>NEW IN: CLOTHING</p>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="borderline col-md-4"></div>
					<div class="col-md-4"></div>
				</div>
			</div>
			

			<div class="inventory-title3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque expedita accusantium, necessitatibus a non, dolore vel. Quia iusto quis, tempore voluptatibus ab, rerum corporis assumenda autem nulla dicta eaque, accusamus!.</div>
			<div class="black-line row"></div>
		</div>
		@foreach($inventory as $item)
		
		<div class="col-md-4 inventory">
			<a href="{{{action('InventoryController@show', $item->id)}}}"><img class="img-responsive" src="{{{$item->image}}}"></a>
			<a class="description" href="">{{{$item->title}}}</a>
			@foreach($item->size_details as $details)
				<p>{{ $details->size }}: {{ $details->price }}</p>
			@endforeach
			
		</div>
	 @endforeach
	 

		<div class="col-sm-12 col-md-12 line-break">
		
		</div>

	<div class='col-sm-12 col-md-12 copyright'>
		<span class='copy'>
		© 2016
		<a href="#">Blackgapco</a>
		</span>
			<div class='social-buttons'>
				<a href="https://www.instagram.com/blackgapco/" target="_blank"><i class="fa fa-instagram"    aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/BlackGapCo/?fref=ts"target="_blank"><i class="fa fa-facebook"  aria-hidden="true"></i></a>
				<a href="https://twitter.com/BlackGapCo" target="_blank"><i class="fa fa-twitter"  aria-hidden="true"></i></a>
			</div>
	</div>

	</div>

@stop

@section('bottom-script')


@stop