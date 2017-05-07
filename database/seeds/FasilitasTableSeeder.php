<?php

use Illuminate\Database\Seeder;

class FasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert(array(
             array('id'=>'1','nama'=>'Wifi','keterangan'=>'We provide free WiFi around villas'),
             array('id'=>'2','nama'=>'Breakfast','keterangan'=>'From 06.30 AM - 11.00 AM'),
             array('id'=>'3','nama'=>'TV and Channels','keterangan'=>'We provide Television with many channel from Europe and Western Country'),
             array('id'=>'4','nama'=>'Fridge','keterangan'=>'We provide fridge to store your food and others'),
             array('id'=>'5','nama'=>'Bicycle','keterangan'=>'We rent bicycle with bicycle tour'),
             array('id'=>'6','nama'=>'Swimming Pool','keterangan'=>'We rent bicycle with bicycle tour'),
             array('id'=>'7','nama'=>'Kitchen','keterangan'=>'Wanna cook something we have kitchen for you'),
             array('id'=>'8','nama'=>'Hot & Cold Shower','keterangan'=>'We have cold & water'),
             array('id'=>'9','nama'=>'Towel','keterangan'=>'We provide clean towel everyday'),
             array('id'=>'10','nama'=>'Coffee Machine','keterangan'=>'We provide Coffee Machine so you can make coffee for your self'),
             array('id'=>'11','nama'=>'DVD Player','keterangan'=>'Need some entertainment, we have DVD Player for you to watch some movie'),
             array('id'=>'12','nama'=>'Laundry','keterangan'=>'Dirty clothes, do not worry anymore'),
             array('id'=>'13','nama'=>'Air Conditioner','keterangan'=>'We provide Air Conditioner on all rooms'),
             array('id'=>'14','nama'=>'Cleaning Service','keterangan'=>'We cleaning house for you'),
             array('id'=>'15','nama'=>'Taxi','keterangan'=>'We book taxi for you'),
             array('id'=>'16','nama'=>'Safe Box','keterangan'=>'We provide Safe Box to keep your belongings safe'),
             array('id'=>'17','nama'=>'Hammock','keterangan'=>'We provide Hammock'),
             array('id'=>'18','nama'=>'King Bed Size','keterangan'=>'We provide King Bed Size'),
             array('id'=>'19','nama'=>'Tropical Garden','keterangan'=>'We have Tropical Garden'),
          ));
    }
}
