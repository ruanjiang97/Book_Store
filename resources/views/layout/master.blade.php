<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Store</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	{{-- <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> --}}
	<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	
</head>
<body>
	@include('layout.elements.header')
	@yield('container')
	@include('layout.elements.footer')

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>