<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	@include('layout.elements.header')
	@yield('container')
	@include('layout.elements.footer')
</body>
</html>