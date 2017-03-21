<?php

use Illuminate\Database\Seeder;
use App\Cards;

class CardsTableSeeder extends Seeder
{
    public function run()
    {
	// DB::table('cards')->

        Cards::create(['title'=>'aberration', 'content'=>'deviation, not normal']);
    }
}
