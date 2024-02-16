<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Push In Menu Demo</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('CSS\Admin\admin_home.css')}}">
		<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	</head>

	<body class="pushmenu-push">
	  
		<div class="container">
		    <div class="main">
		    	<section class="buttonset">
					<img class="logo" src="{{asset('IMAGE\car-logo3.png')}}" alt="">						
					
					<span class="homelink"><a href="/admin_home_page">Home</a></span>
					<span class="homelink logout"><a href="/logout">Logout</a></span>

					<span class="span1">Hello,</span><span class="span2">{{session('user')}}</span>
		        </section>
				
				
		  	</div><!-- End Main -->
		</div><!-- End Container --> 

	</body>
</html>