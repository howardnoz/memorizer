@extends('layout')

@section('content')
	<div class="title m-b-md">
		May force be with you...
	</div>

	<br />

        <?php foreach($cards as $card) : ?>
                <div style="text-align:left; margin-left:400px;";>
			{{ $card->id }}
                	{{ $card->title }}
                </div>
                <br />
        <?php endforeach; ?>
	<br />
	<br />

        <form method="POST" action="exercise">
                {{ csrf_field() }}

                <label for="card">Card</label>
                <input type="number" class="form-control" id="card" name="card" value="{{ $selected_card_id or '' }}" required />
                <label for="content">Content</label>
                <input type="textarea" class="form-control" id="content" name="content" value="{{ $submitted_content or '' }}" required />

                <input type="submit" value="Test"/>
        </form>
	<br />
	<br />

	<div class="form-group alert">
		@if (isset($isCorrect))
			@if ($isCorrect)
				You are correct!
			@else
				Nope. Try again. 
			@endif
		@endif
	</div>

	@include('layouts.errors')
@endsection
