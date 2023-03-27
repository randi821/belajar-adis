<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'	=> 'adis',
            'email'	=> 'adis@gmail.com',
            'password'	=> bcrypt('adiscantik'),
            'role' => 'admin'
        ]);
        \App\User::create([
            'name'	=> 'randi',
            'email'	=> 'randi@gmail.com',
            'password'	=> bcrypt('randijelek'),
            'role' => 'user'
        ]);
        \App\Aduan::create([
            'nama'	=> 'randi',
            'aduan'	=> 'banjir',
            'status'	=> 0
        ]);
        \App\Aduan::create([
            'nama'	=> 'adis',
            'aduan'	=> 'longsor',
            'status'	=> 1
        ]);
        \App\Aduan::create([
            'nama'	=> 'apil',
            'aduan'	=> 'laper',
            'status'	=> 2
        ]);
    }
}
