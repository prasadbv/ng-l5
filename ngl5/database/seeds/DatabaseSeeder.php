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
    }
}
