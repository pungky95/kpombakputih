<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert(array(
             array('nama'=>'Hotel Reviews'),
             array('nama'=>'Travel Tips'),
             array('nama'=>'Around the world'),
             array('nama'=>'Facilities'),
             array('nama'=>'Travel and Food'),
             array('nama'=>'Miscellaneous'),
             array('nama'=>'Our Houses'),
             array('nama'=>'Swimming Pool'),
             array('nama'=>'Sport and Activities'),
          ));
    }
}
