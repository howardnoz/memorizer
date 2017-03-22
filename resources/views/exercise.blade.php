@extends('layout')

@section('content')
	<div class="title m-b-md">
		May force be with you...
	</div>

	<br />

	<form>
		<div>
			<input type="submit" />
		</div>
	</form>
@endsection

@section('top-right-links')
	<a href="{{ url('/home') }}">Home</a>
	<a href="{{ url('/cards') }}">Library</a>
	<a href="{{ url('/exercise') }}">Exercise</a>
@endsection
