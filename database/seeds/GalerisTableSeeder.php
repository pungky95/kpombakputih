<?php

use Illuminate\Database\Seeder;

class GalerisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeris')->insert(array(
             array('id'=>'1','kategori_id'=>'9','blog_id'=>'1','nama'=>'surf2.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/surf2.jpg','size'=>'134264','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'2','kategori_id'=>'9','blog_id'=>'2','nama'=>'snork1-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/snork1-700x400.jpg','size'=>'150181','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'3','kategori_id'=>'9','blog_id'=>'3','nama'=>'IMG_9293-e1423983196439-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/IMG_9293-e1423983196439-700x400.jpg','size'=>'128379','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'4','kategori_id'=>'9','blog_id'=>'4','nama'=>'golf2-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/golf2-700x400.jpg','size'=>'77400','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'5','kategori_id'=>'9','blog_id'=>'5','nama'=>'paradigling3-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/paradigling3-700x400.jpg','size'=>'41017','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'6','kategori_id'=>'9','blog_id'=>'6','nama'=>'watersport1-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/watersport1-700x400.jpg','size'=>'123498','created_at'=>'2017-04-28 00:00:00'),
        ));
        DB::table('galeris')->insert(array(
            array('id'=>'7','kategori_id'=>'4','fasilitas_id'=>'1','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/wifi.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'8','kategori_id'=>'4','fasilitas_id'=>'2','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/coffee-cup.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'9','kategori_id'=>'4','fasilitas_id'=>'3','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/television.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'10','kategori_id'=>'4','fasilitas_id'=>'4','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/004-refrigerator.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'11','kategori_id'=>'4','fasilitas_id'=>'5','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/bicycle.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'12','kategori_id'=>'4','fasilitas_id'=>'6','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/swimming-pool.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'13','kategori_id'=>'4','fasilitas_id'=>'7','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/kitchen.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'14','kategori_id'=>'4','fasilitas_id'=>'8','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/shower.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'15','kategori_id'=>'4','fasilitas_id'=>'9','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/towels.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'16','kategori_id'=>'4','fasilitas_id'=>'10','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/003-coffee-machine.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'17','kategori_id'=>'4','fasilitas_id'=>'11','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/002-dvd.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'18','kategori_id'=>'4','fasilitas_id'=>'12','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/washing-machine.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'19','kategori_id'=>'4','fasilitas_id'=>'13','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/air-conditioner.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'20','kategori_id'=>'4','fasilitas_id'=>'14','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/001-cleaning-lady.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'21','kategori_id'=>'4','fasilitas_id'=>'15','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/taxi.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'22','kategori_id'=>'4','fasilitas_id'=>'16','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/safebox-1.png','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'23','kategori_id'=>'4','fasilitas_id'=>'17','mime'=>'image/jpeg','size'=>'1000000','path'=>'images/gallery/hammock.png','created_at'=>'2017-04-28 00:00:00'),
        ));
    }
}
