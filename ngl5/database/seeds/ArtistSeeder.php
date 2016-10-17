<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gen = ['male','female'];
        foreach(range(1,50) as $index){
          DB::table('artists')->insert([
            'artist_name'		   =>$faker->name($gender = null|'male'|'female'),
            'artist_gender'		 =>$faker->randomElement($gen),
            'artist_pic'       =>$faker->imageUrl($width = 100, $height = 100),
            'artist_gal_pic'	 =>$faker->imageUrl($width = 330, $height = 170, 'cats'),
            'artist_description'=>$faker->text($maxNbChars = 200),
            'created_at' 		   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 		   =>Carbon::now()->format('Y-m-d H:i:s')
          ]);
        };
    }
}
