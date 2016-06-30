@extends('layouts.masters')

@section('top-script')

<style>
	body{
    background: url(/img/tropic.jpg);
    background-attachment:fixed;
}

	.pill {
		position:relative;
	}
</style>


@stop

@section('content')


<div class='container founders-description' >
	<div class='col-xs-12 about'>
		<h1 class="spacer">Local Scene</h1>
		<div class="col-md-4"></div>
		<div class="borderline2 col-md-4"></div>
		<div class="col-md-4" style="color: #C27D50;">.</div>
		<p class="blackgapcocreaters">Blackgapco. was created by two unique individuals on a mission of style</p>
		<div class="borderline3"></div>
	<div class='row roland'>
		<img class='img-responsive'   src="/img/roland.jpg"></img>
			<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi molestiae molestias dolorum doloremque quisquam nam labore optio consequatur fugit architecto voluptate natus alias maxime sequi amet aliquam, harum quae quidem!</h5>
	</div>
	<br>
	<br>
	<div class='row founder'>
		<img class='img-responsive' src="/img/founder.jpg"></img>
			<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi molestiae molestias dolorum doloremque quisquam nam labore optio consequatur fugit architecto voluptate natus alias maxime sequi amet aliquam, harum quae quidem!</h5>
	</div>
	
	</div>


</div>
</body>
@stop

@section('bottom-script')
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="/js/stellar.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

			$(window).stellar();

			
		});

	
</script>

@stop