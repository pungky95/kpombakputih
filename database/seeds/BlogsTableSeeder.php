<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
