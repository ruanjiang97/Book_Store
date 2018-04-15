@extends('layout.master')
@section('container')
<div class="container">
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
	<div class="login">
		<br>
		<br>
		<br>
		<div class="container">
			<h3 class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Login Form</h3>
			<p class="est animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="login-form-grids animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
				<form>
					<input type="email" placeholder="Email Address" required=" ">
					<input type="password" placeholder="Password" required=" ">
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login">
				</form>
			</div>
			<h4 class="animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">For New People</h4>
			<p class="animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;"><a href="{{ route('register') }}">Register Here</a> (Or) go back to <a href="{{ route('home') }}">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	</div>

	<script>
	 	new WOW().init();
	</script>
@endsection