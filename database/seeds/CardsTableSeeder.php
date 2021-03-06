<?php

use Illuminate\Database\Seeder;
use App\Card;

class CardsTableSeeder extends Seeder
{
    public function run()
    {
	// DB::table('cards')->

        Card::create(['title'=>'aberration', 'content'=>'deviation, not normal']);
        Card::create(['title'=>'abstruse', 'content'=>'difficult to understand']);
        Card::create(['title'=>'accost', 'content'=>'confront']);
        Card::create(['title'=>'acrimony', 'content'=>'bitter animosity']);

        Card::create(['title'=>'berate', 'content'=>'scold harshly']);
        Card::create(['title'=>'blighted', 'content'=>'destroyed']);
        Card::create(['title'=>'buttress', 'content'=>'support']);
    }
}
