<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBungalowGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungalow_galeris', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bungalow_id')->unsigned()->nullable();
            $table->foreign('bungalow_id')->references('id')->on('bungalows')->onDelete('cascade');
            $table->integer('galeri_id')->unsigned()->nullable();
            $table->foreign('galeri_id')->references('id')->on('galeris')->onDelete('cascade');
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
        Schema::drop('bungalow_galeris');
    }
}
