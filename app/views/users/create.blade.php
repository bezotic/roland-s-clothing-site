<?php



?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title></title>



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  	

  	<link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

  	

  	<link rel="stylesheet" href="/css/main.css">

	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

	 <link rel='stylesheet' href='/js/chosen.css'>

  	


    
    
    <style>

    	body {
    		font-family: 'Tangerine', serif;
    		
    	}

		#login-brand {
    		max-width: 720px;
    		min-width: 420px;
    		width: 100%;
    		padding: 0px;
		}

		.h1-brand {
			font-weight:400;
		}

		.login-text {
		    font-size: 20px !important;
		    font-weight: 100;
		    margin-bottom: 30px;
		    margin-top: 30px;
		}

		.fa-facebook-square {
		    color: #3B5998;
			margin-right: 25px;
			margin-left: 25px;
		}

		.fa-google-plus-square {
			color: #D75A4A;
			margin-right: 25px;
			margin-left: 25px;
		}

		.fa-twitter-square {
			color: #66B4EF;
			margin-right: 25px;
			margin-left: 25px;
		}

		.login-mid-txt {
			padding: 0;
	    	border: none;
	    	border-top: 1px solid #ccc;
	    	text-align: center;
	    	margin: 30px auto 0 auto;
	    }

	    .login-mid-txt2 {
	    	display: inline-block;
		    position: relative;
		    top: -12px;
		    padding: 0 .5em;
		    background: #fff;
		    font-size: 1.2em;
		    letter-spacing: 1px;
		    font-weight: 100;
	    }

	    #sign-in-btn {
	    	    border-radius: 0;
			    background: #2d2d2d;
			    color: #fff;
			    border: 0;
			    height: 36px;
			    min-width: 200px;
			    text-transform: uppercase;
			    font-size: 15px;
			    white-space: normal;
			    letter-spacing: 1px;
	    }

		#sign-in-btn:hover {
			opacity: .65;
		}


    </style>
</head>
<body>
	<div class="container" id="login-brand">
		<h1 class="h1-brand">Blackgapco.<h1>
	</div>

	  <div class='container login-container'>
		<div class='login-info'>
			<h1>Sign up</h1>
			<div class="login-text">
				Sign in with social.
			</div>
				<br>
				<i class="fa fa-facebook-square fa-5x" aria-hidden="true"></i>
				<i class="fa fa-google-plus-square fa-5x" aria-hidden="true"></i>
				<i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i>
		
			<div class="login-mid-txt">
				<div class="login-mid-txt2">
					or
				</div>
			</div>
	
			<div class="login-text">
				Use your e-mail address
			</div>

			<div class="sign-in-form">
				{{ Form::open(['action' => 'UserController@validateAndSave', 'method'=>'POST', 'class'=>'form-horizontal']) }}

            <h4 class='basic-info'> <i class="fa fa-user fa-1x" aria-hidden="true"></i> Basic Info </h4>
            

            <div class="form-group ">
              <label for="first_name" class="control-label col-sm-3">First Name</label>
              <div class="col-sm-6">
                <input class="form-control" name="first_name" type="text" id="first_name">
                
              </div>
            </div>
                @if ($errors->has('first_name'))
                <p>{{$errors->first('first_name')}}</p>
                @endif

            <div class="form-group ">
              <label for="last_name" class="control-label col-sm-3">Last Name</label>
              <div class="col-sm-6">
                <input class="form-control" name="last_name" type="text" id="last_name">
                
              </div> 
            </div>
                @if ($errors->has('last_name'))
                <p>{{$errors->first('last_name')}}</p>
                @endif

            <div class="form-group ">
              <label for="email" class="control-label col-sm-3">Email</label>
              <div class="col-sm-6">
                <input class="form-control" name="email" type="text" id="email">           
              </div>
            </div>
                @if ($errors->has('email'))
                <p>{{$errors->first('email')}}</p>
                @endif

            <div class="form-group ">
              <label for="city" class="control-label col-sm-3">City</label>
              <div class="col-sm-6">
                <input class="form-control" name="city" type="text" id="city">             
              </div>
            </div>
                 @if ($errors->has('city'))
                <p>{{$errors->first('city')}}</p>
                @endif

            <div class="form-group ">
              <label for="state" class="control-label col-sm-3">State</label>
              <div class="col-sm-6">
                  <select class="form-control " name="state" id="state"></select>
              </div>
            </div>
                 @if ($errors->has('state'))
                <p>{{$errors->first('state')}}</p>
                @endif
            
            <div class="form-group ">
              <label for="password" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" name="password" type="password" value="" id="password">            
              </div>
            </div>
                 @if ($errors->has('password'))
                <p>{{$errors->first('password')}}</p>
                @endif
            
            <div class="form-group ">
              <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-6">
                <input class="form-control password_confirm" name="password_confirmation" type="password" value="" id="confirmPassword">
              </div>
            </div>

             {{ Form::submit('SIGN UP', ['id' => "sign-in-btn" ,'type'=> "submit" ,'name' =>'sign-up' ,'value' => 'true', 'class' => "btn btn-default"]) }}
             
		

     {{Form::close()}}
				
			</div>
			<div class="password-forget">
				<a href="#" style="color: black; text-align: center; text-decoration: underline;">Forgot password?</a>
			</div>
			<div class="login-mid-txt"></div>
			<div class="no-account">
				Don't have an account? <a href="#">Why not join today?</a>
			</div>

		</div>
	  </div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
<script src="/js/countries.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script language="javascript">

populateStates("state");
$(".state").chosen(); 

</script>
	
</body>
</html>