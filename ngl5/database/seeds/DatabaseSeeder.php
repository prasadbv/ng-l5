<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // $this->call(UsersTableSeeder::class);
    //
    // }
    public function run()
    {
        $faker = Faker::create();
        // foreach(range(1,50) as $index){
        //   DB::table('movies')->insert([
        //     'name'=>$faker->name,
        //     'language'=>$faker->languageCode,
        //     'genre'=>$faker->name,
        //     'image'=>$faker->imageUrl,
        //     'certificate'=>'A'
        //   ]);
        // }
        foreach(range(1,50) as $index){
          DB::table('movie_sites')->insert([
            'movie_id'=>$faker->numberBetween(1,50),
            'name'=>$faker->name,
            'logo'=>$faker->imageUrl,
            'rating'=>$faker->numberBetween(1,5)

          ]);
        }
    }
}
