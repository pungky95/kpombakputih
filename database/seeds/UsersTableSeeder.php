<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'Koos Buis',
                'email' => 'dinafur@hotmail.com',
                'password' => bcrypt('chivasdakota'),
                'created_at' => '2017-02-25 22:53:44',
            ]);
    }
}
