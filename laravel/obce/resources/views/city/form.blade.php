<form action="{{ route('city.search') }}" method="POST" class="col-sm-6 col-sm-offset-3" role="form">
	@csrf
	<div class='form-group {{ $errors->any() ? 'has-error has-feedback' : '' }}'>
		<label class="sr-only" for="input_search_city">Zadajte názov</label>
		<div class="input-group input-group-lg">
			<input type="text" class="form-control" id="input_search_city" name="city_name" placeholder="Zadajte názov" value="{{ old('city_name') }}">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="sr-only">Vyhľadaj</span></button>
			</span>
    	</div><!-- /input-group -->
    	@if ($errors->any())
    	    @foreach ($errors->all() as $error)
    	    	<span class="help-block">
    	        	{{ $error }}</br>
    	        </span>
    	    @endforeach
    	@endif
	</div>
</form>