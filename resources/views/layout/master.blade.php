<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Store</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
	<link href="css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
	@include('layout.elements.header')
	@yield('container')
	@include('layout.elements.footer')
</body>
</html>