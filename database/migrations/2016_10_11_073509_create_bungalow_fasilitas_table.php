<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBungalowFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungalow_fasilitas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bungalow_id')->unsigned();
            $table->foreign('bungalow_id')->references('id')->on('bungalows')->onDelete('cascade');
            $table->integer('fasilitas_id')->unsigned();
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas')->onDelete('cascade');
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
        Schema::drop('bungalow_fasilitas');
    }
}
