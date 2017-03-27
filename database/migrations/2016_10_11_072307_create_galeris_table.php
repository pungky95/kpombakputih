<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeris', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('fasilitas_id')->unsigned()->nullable();
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas')->onDelete('cascade');
            $table->integer('kategori_id')->unsigned()->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->string('nama',255);
            $table->string('mime',20);
            $table->string('path',100);
            $table->string('size',30);
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
        Schema::drop('galeris');
    }
}
