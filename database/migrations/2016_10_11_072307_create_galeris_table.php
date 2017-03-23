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
            $table->string('foto',255);
            $table->string('kategori',255);
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
