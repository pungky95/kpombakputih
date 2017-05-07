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
        $this->call(KategorisTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(FasilitasTableSeeder::class);
        $this->call(GalerisTableSeeder::class);
    }
}
