
		<style>
		 .navbar-default{
			background-color: black;
			position:relative; 
			width:100%;
			font-size: 2rem;
			border-radius: 0;
			margin:0;
			

			
		}

		.navbar-default .navbar-collapse, .navbar-default .navbar-form {
		    border: 0px;
		    margin-bottom: 1px;
		    width:100%;
		}

		
		

		.navbar-default .navbar-collapse, .navbar-default .navbar-form {
			border: 0px ;
			margin-bottom: 1px;
		}

		

		.navbar-default .navbar-nav>li>a:hover {
		   	
			
			color:white;
			-webkit-transition: all 1000ms ease;
			-moz-transition: all 1000ms ease;
			-ms-transition: all 1000ms ease;
			-o-transition: all 1000ms ease;
			transition: all 1000ms ease;
		}
		
		.nav-text {
			
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
	    color: white;
		}

		a.nav-text {
			text-align: center;
		}

		.row {
			color: #b3bcb7;
    		
    		text-align: center;
		}

		.icons {
			float:right;

		}

		.icon {
			color:#b3bcb7;
			padding-right: .7em
		}

		.icon:hover {
			color:#A8C8BB;
			-webkit-transition: all 1000ms ease;
			-moz-transition: all 1000ms ease;
			-ms-transition: all 1000ms ease;
			-o-transition: all 1000ms ease;
			transition: all 1000ms ease;

		}
		
		 h1 {
	    font-size: 42px;
	    line-height: 48px;
	    color: black;
		}
		
		.log-out {
			color:black;
		}

	</style>

		    
	@if(Auth::user())


	<div class= "row">
	<h1>Blackgapco.</h1>
		<div class="container">
			<div class="icons">
			  <a class='log-out' href="{{{action('UserController@logout')}}}">sign out</a>
			  <a class="icon" href="#">	<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
			</div>
			
		</div>
</div>

	<nav class="navbar navbar-default" style="border-color: #333;">
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
		      	<li><a class="welcome-user">Welcome,{{Auth::user()->first_name}}!</a></li>
				<li><a class="nav-text" href="{{{action('UserController@showLogin')}}}">log-in/sign-up</a></li>

				<li><a class="nav-text" href="{{{action('UserController@showAbout')}}}">About</a></li>
				
					     
		    </div><!-- /.navbar-collapse -->
	</nav>
	@endif

	@if(!Auth::user())
		<div class= "row">
			<h1>Blackgapco.</h1>
				<div class="container">
					<div class="icons">
					  <a class="icon" href="#">	<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
					</div>
					
				</div>
		</div>

			<nav class="navbar navbar-default" style="border-color: #333;">
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
						<li><a class="nav-text" href="{{{action('UserController@showLogin')}}}">log-in/sign-up</a></li>

						<li><a class="nav-text" href="{{{action('UserController@showAbout')}}}">About</a></li>

						<li><a class="nav-text" href="{{{action('InventoryController@index')}}}">Merch</a></li>
						
							     
				    </div><!-- /.navbar-collapse -->
			</nav>

@endif



