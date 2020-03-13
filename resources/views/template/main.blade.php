<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="PHP, HTML, CSS, XML, XHTML, JavaScript">
	<meta http-equiv="refresh" content="30">

	<script type="text/javascript" src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('node_modules/popper.js/dist/popper.min.js') }}" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/assets/js/custom.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />
</head>
	<header>
		@include('template.header')   
	</header>
	
	<body>
		<div class="container">
			@yield('content')
		</div>
	</body>

	<footer>
		@include('template.footer')
	</footer>
</html>  