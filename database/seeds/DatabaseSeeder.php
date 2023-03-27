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
            'jenis_kelamin' => 'perempuan',
            'alamat_lengkap' => 'jln.veteran III',
            'email'	=> 'adis@gmail.com',
            'password'	=> bcrypt('adiscantik'),
            'role' => 'admin'
        ]);
        \App\User::create([
            'name'	=> 'apil',
            'jenis_kelamin' => 'laki-laki',
            'alamat_lengkap' => 'jln.veteran III',
            'email'	=> 'apil@gmail.com',
            'password'	=> bcrypt('apilkocheng'),
            'role' => 'petugas'
        ]);
        \App\User::create([
            'name'	=> 'randi',
            'jenis_kelamin' => 'laki-laki',
            'alamat_lengkap' => 'jln.veteran III',
            'email'	=> 'randi@gmail.com',
            'password'	=> bcrypt('randijelek'),
            'role' => 'user'
        ]);
        \App\Aduan::create([
            'nama' => 'randi',
            'nik'	=> '3201240508040004',
            'no_telp' => '089532632635',
            'lokasi' => 'bogor',
            'aduan'	=> 'banjir',
            'image' => 'tes.png',
            'status'	=> 0
        ]);
        \App\Aduan::create([
            'nama' => 'adis',
            'nik'	=> '3201240508040004',
            'no_telp' => '089532632635',
            'lokasi' => 'bogor',
            'aduan'	=> 'longsor',
            'image' => 'tes.png',
            'status'	=> 1
        ]);
        \App\Aduan::create([
            'nama' => 'apil',
            'nik'	=> '3201240508040004',
            'no_telp' => '089532632635',
            'lokasi' => 'bogor',
            'aduan'	=> 'laper',
            'image' => 'tes.png',
            'status'	=> 2
        ]);
    }
}
