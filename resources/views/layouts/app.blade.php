<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/app.css"/>
	</head>

	<body>
		<div class="content">
			@include('inc.header')			
			@yield('content')
			@include('inc.scrollup')
		</div>
		@include('inc.footer')
	</body>

	<script src="/js/app.js"></script>
</html>