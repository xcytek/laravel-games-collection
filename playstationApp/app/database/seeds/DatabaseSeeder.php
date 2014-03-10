<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GamesTableSeeder');
	}
	
	

}

use Faker\Factory as Faker;

class GamesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 100) as $index)
        {
            Game::create([
                'title' => $faker->username, 
                'publisher' => $faker->city, 
                'complete' => 0
	            
            ]);
        }
    }

}