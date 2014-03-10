<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GamesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $index)
        {
            Game::create([
                'title' => $faker->username, 
                'publisher' => $faker->city, 
                'user_email' => 'alexcarter15@hotmail.com',
                'complete' => 0
	            
            ]);
        }
        foreach(range(1, 30) as $index)
        {
            Game::create([
                'title' => $faker->username, 
                'publisher' => $faker->city, 
                'user_email' => 'essien@alex.com',
                'complete' => 0
	            
            ]);
        }
    }

}