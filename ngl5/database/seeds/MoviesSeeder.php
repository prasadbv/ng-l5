<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MoviesSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index){
          DB::table('movies')->insert([
            'name'=>$faker->name,
            'language'=>$faker->name,
            'genre'=>$faker->name,
            'image'=>$faker->imageUrl,
            'certificate'=>'A'
          ]);
        };
    }
}
