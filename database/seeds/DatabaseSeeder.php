<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(TestimonisTableSeeder::class);

         DB::table('kategoris')->insert(array(
             array('nama'=>'Hotel Reviews'),
             array('nama'=>'Travel Tips'),
             array('nama'=>'Around the world'),
             array('nama'=>'Facilities'),
             array('nama'=>'Travel and Food'),
             array('nama'=>'Miscellaneous'),
             array('nama'=>'Room'),
             array('nama'=>'Swimming Pool'),
             array('nama'=>'Sport'),
             array('nama'=>'Facilities'),
          ));

    }
}
