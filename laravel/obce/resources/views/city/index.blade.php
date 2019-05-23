@extends('master')
@section('title', 'Vyhľadaj obec')

@section('content')

	<main class="jumbotron jumbotron_search">
		<div class="container">
			<h2 class="jumbotron__title text-center">Vyhľadať v databáze obcí</h2>

			@include('city.form')

		</div>
	</main>

@endsection