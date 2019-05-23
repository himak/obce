<!DOCTYPE html>
<html lang="sk">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title', 'Obce')</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body class="{{ Request::segment(1) ?: 'home' }}">

	@include('_partials.navbar')

	@yield('content')

	@include('_partials/footer')

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>