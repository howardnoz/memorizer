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
