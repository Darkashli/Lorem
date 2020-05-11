<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="PHP, HTML, CSS, XML, XHTML, JavaScript">
    <meta http-equiv="refresh" content="30">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

</head>
	<header>
		@include('template.header')
	</header>

	<body>
		<div class="container">
			@yield('content')
		</div>
    </body>
    <br>
	<footer>
		@include('template.footer')
	</footer>
</html>
