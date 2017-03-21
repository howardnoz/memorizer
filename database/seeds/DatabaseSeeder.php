<?php

use Illuminate\Database\Seeder;
//use database\seeds\CardsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->command->info('Cards table seeded!');
    }
}
