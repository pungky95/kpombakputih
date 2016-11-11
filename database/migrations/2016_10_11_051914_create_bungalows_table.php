<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBungalowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungalows', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama',25);
            $table->float('tarif_low');
            $table->float('tarif_high');
            $table->string('keterangan',1000);
            $table->tinyinteger('jumlah_kamar');
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
        Schema::drop('bungalows');
    }
}
