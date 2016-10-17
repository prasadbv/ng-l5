<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class MoviesSeeder extends Seeder
{ 

    public function run()
    {
        $faker = Faker::create();
        $lang  = ['english','hindi'];$lang2 = ['telugu','tamil','malayalam'];
        $genre = ['Action','Adventure','Animation','Biography','Comedy','Crime','Drama','Family','Fantasy','Horror','Mystery','Romance','Sci-Fi','Thriller'];
        $artist = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach(range(1,50) as $index){
          DB::table('movies')->insert([
            'name'=>$faker->name,
            'language'=>$faker->randomElement($lang).",".$faker->randomElement($lang2),
            'genre'=>$faker->randomElement($genre).",".$faker->randomElement($genre),
            'image'=>$faker->imageUrl($width = 220, $height = 330),
            'certificate'=>'A',
            'artist_id'=>$faker->randomElement($artist).",".$faker->randomElement($artist),
            'status'=>$faker->randomElement([1,2,3,4]),
            'rating'=>$faker->randomElement([1,2,3,4,5]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s')
          ]);
        };
    }
    
}
