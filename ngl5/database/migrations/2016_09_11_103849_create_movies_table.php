<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('movies',function(Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->string('language');
        $table->string('genre');
        $table->string('image');
        $table->string('certificate');
        $table->integer('status');
        $table->integer('rating');
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
        Schema::Drop('movies');
    }
}
