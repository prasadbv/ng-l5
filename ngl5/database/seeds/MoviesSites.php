<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MoviesSites extends Seeder
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
        DB::table('movie_sites')->insert([
          'movie_id'=>$faker->numberBetween($min=0,$max=50),
          'name'=>$faker->name,
          'logo'=>$faker->imageUrl,
          'rating'=>$faker->numberBetween($min=0,$max=5)
        ]);
      };
    }
}
