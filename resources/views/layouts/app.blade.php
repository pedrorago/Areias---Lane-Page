<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>JRF - Areias & Britas</title>

	<base href="{{ config('app.url') }}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="rights" content="JRF">
	<meta name="generator" content="JRF">

	<meta property="og:type" content="website">
	<meta property="og:image" content="{{ config('app.url') }}img/logo.svg">

	<link rel="icon" href="img/icon.png">

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700|Roboto+Slab|Roboto:100,300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive.css">

</head>
<body>
	@include('template.header')

	@yield('content')

	@include('template.footer')

	<script src="js/jquery.js"></script>
	<script src="js/app.js"></script>
</body>
</html>