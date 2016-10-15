<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Movie;
use Carbon\Carbon;
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
      //$movies_id = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

      foreach(range(1,50) as $index){
        DB::table('movie_sites')->insert([
          'movie_id'=>$faker->numberBetween($min=1,$max=50),
          'site_name'=>$faker->name,
          'site_logo'=>$faker->imageUrl($width = 84, $height = 24),
          'site_rating'=>$faker->numberBetween($min=1,$max=5),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
      };
    }
}
