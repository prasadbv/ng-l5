<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        $user_id = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach(range(1,50) as $index){
          DB::table('posts')->insert([
            'title'		   	=>$faker->text($maxNbChars = 30),
            'body'		 	=>$faker->paragraphs($nbSentences = 3, $variableNbSentences = true),
            'post_img'		=>$faker->imageUrl($width = 330, $height = 160),
            'slug'			=>$faker->slug,
            'user_id'		=>$faker->randomElement($user_id),
            'comment_id'	=>$faker->randomElement($user_id),
            'created_at' 	=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' 	=>Carbon::now()->format('Y-m-d H:i:s')
          ]);
        };
    }

}
