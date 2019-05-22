@extends('master')
@section('title', 'Obce')

@section('content')

	<main class="jumbotron jumbotron_search">
		<div class="container">
			<h2 class="jumbotron__title text-center">Vyhľadať v databáze obcí</h2>
			<form action="" method="POST" class="col-sm-6 col-sm-offset-3" role="form">
				<div class="input-group input-group-lg">
					<label class="sr-only" for="input_search_city">Zadajte názov</label>
					<input type="text" class="form-control" id="input_search_city" name="input_search_city" placeholder="Zadajte názov">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="sr-only">Vyhľadaj</span></button>
					</span>
			    </div><!-- /input-group -->
			</form>
		</div>
	</main>

@endsection