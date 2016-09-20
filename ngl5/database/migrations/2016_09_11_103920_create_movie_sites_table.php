<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('movie_sites',function(Blueprint $table){
        $table->increments('id');
        $table->integer('movie_id');
        $table->string('site_name');
        $table->string('site_logo');
        $table->string('site_rating');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::Drop('movie_sites');
    }
}
