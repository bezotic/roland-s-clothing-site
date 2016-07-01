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
			<a href="#"><img class="img-responsive" src="/img/hattransparent.jpg"></a>
			<a class="description" href="#">BLACK lowkey CAP 100% cotton</a>
		<p>{{{$item->title}}}</p>	
			
		</div>
	 @endforeach	
		<div class="col-md-4 inventory">
			<a href="#"><img class="img-responsive" src="/img/pinkhat.jpg"></a>
			<a class="description" href="#">PINK lowkey CAP 100% cotton</a>
		</div>
		<div class="col-md-4 inventory">
			<a href="#"><img class="img-responsive" src="/img/whitehat.jpg"></a>
			<a class="description" href="#">WHITE lowkey CAP 100% cotton</a>
		</div>
	<div class='bottom-portion'>
		<div class="col-md-4 inventoryb">
			<a href="#"><img class="img-responsive" src="/img/hoodie.jpg"></a>
			<a class="description" href="#">T-02 BGC REVIVAL HOODIE 100% cotton</a>
		</div>

	</div>

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