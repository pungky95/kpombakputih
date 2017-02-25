<?php

use Illuminate\Database\Seeder;

class TestimonisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonis')->insert([
                'nama_tamu' => 'Toni',
                'konten' => 'Disini sangat membahagiakan dan menyenangkan karena saya memiliki beberapa pengalaman pribadi',
            ]);
        DB::table('testimonis')->insert([
                'nama_tamu' => 'Toni',
                'konten' => 'Terima kasih untuk lina dan koos yang telah memberikan pelayanan yang luar biasa',
            ]);
    }
}
