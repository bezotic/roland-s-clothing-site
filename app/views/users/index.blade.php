@extends('layouts.masters')

@section('top-script')

@stop

@section('content')
 
		 <div id= 'wall_1' class='image' data-stellar-background-ratio ='0.5'>
		 	<h2 data-stellar-ratio="0.5">Hello</h2>
		 </div>
	

<div class="container">
	<div class="col-md-4">
		<div class="index-img">
			<a href="url"><img src="/img/hattransparent.jpg"></img></a>
		</div>

		<div class="thumb-links">
			<a href="url">purchase</a>
		</div>
	</div>
	<div class="col-md-4">
		<div class="index-img">
			<a href="url"><img src="/img/shirttransparent.jpg"></img></a>
		</div>

		<div class="thumb-links">
			<a href="url">da</a>
		</div>
	</div>
	<div class="col-md-4">
		<div class="index-img">
			<a href="url"><img src="/img/instagram.jpg"></img></a>
		</div>

		<div class="thumb-links">
			<a href="url">product</a>
		</div>
	</div>


	<div class="col-sm-12 col-md-12 center aboutAlignMiddle clearPads">
			<div class="aboutWrapper row-padding-l">
				<div class="aboutTable">
					<div class="aboutContent center">
						<h1 class="whyblackco">Why Blackgapco?</h1>
						<div class="container-fluid">
							<div class="row-padding">
								<p class="whyblackco">									Because your purchase helps local artists.</p>
								<p class="whyblackco">
									<i class="fa fa-diamond fa-2x" style="color: #4698AD;" aria-hidden="true"></i></p>
								<p class="whyblackco">								Who Are We?</p>						</div>
							<a href="{{{action('UserController@showAbout')}}}" class="aboutCTA mainCTA">About</a>
						</div>
					</div>
				</div>
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