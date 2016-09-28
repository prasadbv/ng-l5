<?php
//use App\MoviesSeeder;
use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();
        DB::table('movies')->truncate();
        $this->call('MoviesSeeder');
        DB::table('movie_sites')->truncate();
        $this->call('MoviesSites');
        DB::table('movie_movie_site')->truncate();
        $this->call('MoviesPivotTable');
        DB::table('artists')->truncate();
        $this->call('ArtistSeeder');
    }
}
