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
            'password'	=> bcrypt('adiscantik')
        ]);
        \App\User::create([
            'name'	=> 'randi',
            'email'	=> 'randi@gmail.com',
            'password'	=> bcrypt('randijelek')
        ]);
    }
}
