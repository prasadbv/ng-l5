<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ArtistRelation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $mvp = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach(range(1,50) as $index){
          DB::table('artist_movie')->insert([
            'artist_id'=>$faker->randomElement($mvp),
            'movie_id'=>$faker->randomElement($mvp)
          ]);
        };
    }
}
