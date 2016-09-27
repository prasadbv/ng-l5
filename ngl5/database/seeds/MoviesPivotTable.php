<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon; 
class MoviesPivotTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index){
          DB::table('movie_movie_site')->insert([
            'movie_id'=>$faker->numberBetween($min=1,$max=50),
            'site_id'=>$faker->numberBetween($min=1,$max=50)
          ]);
        };
    }
}
