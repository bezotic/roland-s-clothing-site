@extends('layouts.masters')

@section('top-script')

@stop

@section('content')
	<style>
	 .navbar-default{
		background-color: white;
		
		color:black;
		position:relative; 
		width:100%;
		font-size: 2rem;
		margin-left: 10px;

		
	}

	
	

	.navbar-default .navbar-collapse, .navbar-default .navbar-form {
		border: 0px ;
		margin-bottom: 1px;
	}

	

	.navbar-default .navbar-nav>li>a:hover {
	    text-decoration: none;
	    text-align: center;
	    
	    box-shadow: 0 0 0 4px black inset;
	   	
		padding:0, 15;
		color:black;
		-webkit-transition: all 700ms ease;
		-moz-transition: all 700ms ease;
		-ms-transition: all 700ms ease;
		-o-transition: all 700ms ease;
		transition: all 700ms ease;
	}
	
	.nav-text {
		color:white;
		font-size: 1.2em;
	}

	.nav>li>a {
		padding-right: 5em;
		
	}

	.user {
	    position: relative;
	    left: 50em;
	    top: 1em;

	}
	
	.navbar-default .navbar-nav>li>a {
    color: black;
	}

	a.nav-text {
		text-align: center;
	}

	

</style>

	    <!-- Brand and toggle get grouped for better mobile display -->
@if(Auth::user())
<nav class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a class="nav-text" >Home</a></li>
			<li><a class="nav-text"  >Projects</a></li>
			<li><a class="nav-text"  >Account</a></li>
			<li><a class="nav-text"  >Logout</a></li>
			<li><a class="nav-text"  >About</a></li>
	     
	    </div><!-- /.navbar-collapse -->
</nav>
@endif


<nav class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a class="nav-text"  >log-in</a></li>
			<li><a class="nav-text"  >sign-up</a></li>
			<li><a class="nav-text" >About</a></li>
			<li><a class="nav-text"  >Projects</a></li>
				     
	    </div><!-- /.navbar-collapse -->
</nav>





@stop

@section('bottom-script')

@stop