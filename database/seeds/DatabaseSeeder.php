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

         DB::table('blogs')->insert(array(
             array('id'=>'1','kategori_id'=>'9','nama'=>'Surfing','Konten'=>'<p>

Bali has beautiful Surfing Beaches, all in the vicinity of Ombak Putih,such as :- Sri Lanka beach at 2 minutes driving- Geger Beach at 10 minutes and Ulluwatu and Dreamland at approximately 25 minutes.These beaches are all located on the peninsula near the airport.A true paradise for surfers.

<br></p>','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'2','kategori_id'=>'9','nama'=>'Diving / Snorkling','Konten'=>'<p>

Bali has magnificent diving opportunities in the Indian Oceaan.A diving course starts in our own swimming pool (for beginners), but moves quickly to diving on location.Through cooperation with the eknown diving school, Mirah Divecenter’the favourite of the late Prince Bernhard ofThe Netherlands’ Ombak Putih can offer you the best competitive prices.

<br></p>','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'3','kategori_id'=>'9','nama'=>'Biking','Konten'=>'<p>

An exellent way to explore Bali is on bike.The advantageous climate and the beautiful nature makes it a true paradise to go for a mountain bike tour.Tours can be organised for bikers of all levels.Ombak Putih organises simple and extensive multiple days tours over the island and with the accompaniment of an expert.Koos Buis ,being an experienced mountain biker, can advise you about what will be the best choice for you and your company.Ombak Putih rents perfect kept bikes of high standard quality.You will have an unforgettable experience and you will experience your holidays on Bali on a different level.

<br></p>','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'4','kategori_id'=>'9','nama'=>'Golf','Konten'=>'<p>

Bali has four beautiful golfing possibilities for the spoiled Golf-player.We can arrange for you green fees, including transportation to and from the golf courses.If you want to use the golf possibilities on Bali, please contact us beforehand.

<br></p>','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'5','kategori_id'=>'9','nama'=>'Paragliding','Konten'=>'<p>

Paragliding is one of the many sport possibilities that can be done in the invironment of Nusa Dua.The cliffs near the Nikko Hotel is the place to be on Bali on behalf of paragliding.Are you interested in this breathtaking sport?We can organize a course for you during your stay at Ombak Putih.August and September are the most ideal months to exercise paragliding.

<br></p>','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'6','kategori_id'=>'9','nama'=>'Watersport','Konten'=>'<p>

Just opposite our bungalows within walking distance is the beach where you can enjoy all other forms of watersports such as : Jetski, para sailing, banaboating, glass bottom boating and fishing. Diving is also possible right from the beach .We can advise you about all these possibilities !

<br></p>','created_at'=>'2017-04-28 00:00:00'),

          ));

         DB::table('galeris')->insert(array(
             array('id'=>'1','kategori_id'=>'9','blog_id'=>'1','nama'=>'surf2.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/surf2.jpg','size'=>'134264','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'2','kategori_id'=>'9','blog_id'=>'2','nama'=>'snork1-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/snork1-700x400.jpg','size'=>'150181','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'3','kategori_id'=>'9','blog_id'=>'3','nama'=>'IMG_9293-e1423983196439-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/IMG_9293-e1423983196439-700x400.jpg','size'=>'128379','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'4','kategori_id'=>'9','blog_id'=>'4','nama'=>'golf2-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/golf2-700x400.jpg','size'=>'77400','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'5','kategori_id'=>'9','blog_id'=>'5','nama'=>'paradigling3-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/paradigling3-700x400.jpg','size'=>'41017','created_at'=>'2017-04-28 00:00:00'),
             array('id'=>'6','kategori_id'=>'9','blog_id'=>'6','nama'=>'watersport1-700x400.jpg','mime'=>'image/jpeg','path'=>'/images/gallery/watersport1-700x400.jpg','size'=>'123498','created_at'=>'2017-04-28 00:00:00'),
          ));

         DB::table('fasilitas')->insert(array(
             array('id'=>'1','nama'=>'Wifi','keterangan'=>'We provide free WiFi around villas'),
             array('id'=>'2','nama'=>'Breakfast','keterangan'=>'From 06.30 AM - 11.00 AM'),
             array('id'=>'3','nama'=>'Room Cleaning Service','keterangan'=>'Villas get dirty?, Dont worry we will Clean all for you before you arrive'),
             array('id'=>'4','nama'=>'TV-Channels','keterangan'=>'We provide Television with many channel from Europe and Western Country'),
             array('id'=>'5','nama'=>'Fridge','keterangan'=>'We provide fridge to store your food and others'),
             array('id'=>'6','nama'=>'Bicycle','keterangan'=>'We rent bicycle with bicycle tour'),
          ));


    }
}
