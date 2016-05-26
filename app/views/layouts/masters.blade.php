
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  	

  	<link rel="stylesheet" href="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
  	

  	<link rel="stylesheet" href="/css/">

	<script src="//cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

  	


    
    @yield('top-script')
</head>
<body>

	


	@if (Session::has('successMessage'))

    <div class="alert alert-success">{{{ Session::get('successMessage') }}}

    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span>
		</button>

    </div>

	@endif

	@if (Session::has('errorMessage'))

	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>

	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span>
		</button>

	@endif

	
	@yield('content')
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
		if ($("#body").length != 0) {
			var simplemde = new SimpleMDE({ element: $("#body").get(0) });
		}


		if ($("#comment").length != 0) {
		 	var simplemde = new SimpleMDE({ element: $("#comment").get(0) });
		}

		setTimeout(function(){
			$(".alert").slideUp(1000);
		},1000)


		
		

		

	</script>

	@yield('bottom-script')
</body>
</html>