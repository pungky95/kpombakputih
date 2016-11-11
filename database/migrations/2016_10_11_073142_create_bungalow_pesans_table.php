<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBungalowPesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungalow_pesans', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bungalow_id')->unsigned();
            $table->foreign('bungalow_id')->references('id')->on('bungalows')->onDelete('cascade');
            $table->integer('pesan_id')->unsigned();
            $table->foreign('pesan_id')->references('id')->on('pesans')->onDelete('cascade');
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
        Schema::drop('bungalow_pesans');
    }
}
