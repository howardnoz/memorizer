@extends('../layout')

@section ('content')
	<div class="title m-b-md">
		Shhh... Library this is	
	</div>

	<br />

	<form>
		<?php foreach($cards as $card) : ?>
			<div>{{ $card->title }}</div>
			<div>{{ $card->content }}</div>
			<br />
		<?php endforeach; ?>

		<br />

		<div>
			<input type="submit" />
		</div>
	</form>
@endsection 

@section('top-right-links')
	@if (Route::has('login'))
		@if (Auth::check())
			<a href="{{ url('/home') }}">Home</a>
		@else
			<a href="{{ url('/login') }}">Login</a>
			<a href="{{ url('/register') }}">Register</a>
		@endif
	@else 
		<a href="{{ url('/home') }}">Home</a>
	@endif

	<a href="{{ url('/cards') }}">Library</a>
	<a href="{{ url('/exercise') }}">Exercise</a>
@endsection 
