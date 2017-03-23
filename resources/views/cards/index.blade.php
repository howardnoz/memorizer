@extends('../layout')

@section ('content')
	<div class="title m-b-md">
		Shhh... Library this is	
	</div>

	<br />

	<?php foreach($cards as $card) : ?>
		<div>{{ $card->title }}</div>
		<div>{{ $card->content }}</div>
		<br />
	<?php endforeach; ?>

	<form method="POST" action="/cards">
		{{ csrf_field() }}

		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" required />
		<label for="content">Content</label>
		<input type="text" class="form-control" id="content" name="content" required />

		<input type="submit" value-"Create"/>
	</form>
	
	@include('layouts.errors')
@endsection 
