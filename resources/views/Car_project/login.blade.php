<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{asset('CSS\login.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

	<style>
		.error{
			color:red;
		}
	</style>
</head>
<body>
<div class="container">
	
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="login">
			@csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="user" placeholder="Email Id" autocomplete="off">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="password" class="login__input" name="Password" placeholder="Password" autocomplete="off">
					<span style="cursor:pointer;"><i onclick="myFunction()" class="fa-solid fa-eye"></i></span>
				</div>
				@if($errors->any())
				<span class="error"><h4>{{$errors->first()}}</h4></span>
				@endif	
				<button class="button login__submit" name="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
						
			</form>

			
			<div class="social-login">
				<h3>follow on</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fa-brands fa-x-twitter"></a>
				</div>

				<p class="regi_p"><a href="regi">New User? Registration</a></p>
				
			</div>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
	
</div>

<script>
	function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
</script>
</body>
</html>