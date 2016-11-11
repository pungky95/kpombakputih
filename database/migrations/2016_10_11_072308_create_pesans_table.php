<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemesan',50);
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('jumlah_anak');
            $table->integer('jumlah_dewasa');
            $table->string('permintaan_khusus',255);
            $table->string('no_telepon',20);
            $table->string('email',50);
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
        Schema::drop('pesans');
    }
}
