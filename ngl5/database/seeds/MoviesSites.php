<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Movie;
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
      $movies = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50];
      foreach(range(1,50) as $index){
        DB::table('movie_sites')->insert([
          'movie_id'=>$faker->randomElement($movies),
          'movies_id'=>$faker->numberBetween($min=0,$max=50),
          'site_name'=>$faker->name,
          'site_logo'=>$faker->imageUrl,
          'site_rating'=>$faker->numberBetween($min=1,$max=5)
        ]);
      };
    }
}
