<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('nama',100);
            $table->string('konten',5000);
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
        Schema::drop('blogs');
    }
}
