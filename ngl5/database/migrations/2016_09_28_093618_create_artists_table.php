<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists',function(Blueprint $table){
            $table->increments('id');
            $table->string('artist_name');
            $table->string('artist_gender');
            $table->string('artist_pic');
            $table->string('artist_gal_pic');
            $table->longText('artist_description');
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
        Schema::Drop('artists');
    }
}
