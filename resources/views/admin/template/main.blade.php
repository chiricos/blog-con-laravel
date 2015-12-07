<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset ="UTF-8">
	<title>@yield('title','Default') -Blog </title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="wrapper">
	@include('admin.template.partials.nav')
	<h1>@yield('title')</h1>
    @include('admin.template.partials.alerts')
	<section>
		@yield('content')
	</section>
</div>
	
	<script src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>