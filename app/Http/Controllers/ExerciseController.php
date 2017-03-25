<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class ExerciseController extends Controller
{
    /**
     * Display exercise page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$cards = Card::all();
        return view('exercise', compact('cards'));
    }

    /**
     * Test if exercise submission is correct.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
	$this->validate(request(), [
		'card' => 'required',
		'content' => 'required'
	]);

	$cards = Card::all();
	$selected_card_id = request('card');
	$submitted_content = request('content');
	$selected_card = Card::find(request('card'));

	$isCorrect = $selected_card->content == request('content');

	return view('exercise', compact('cards', 'isCorrect', 'selected_card_id', 'submitted_content'));

    }
}
