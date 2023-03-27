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
            'password'	=> bcrypt('iniadis1204'),
            'role' => 'admin'
        ]);
        \App\User::create([
            'name'	=> 'apil',
            'jenis_kelamin' => 'laki-laki',
            'alamat_lengkap' => 'Gg. Limbung Bangsa no. 107',
            'email'	=> 'apil@gmail.com',
            'password'	=> bcrypt('apilganglimbung'),
            'role' => 'petugas'
        ]);
        \App\User::create([
            'name'	=> 'jimin',
            'jenis_kelamin' => 'laki-laki',
            'alamat_lengkap' => 'korea utara no 345',
            'email'	=> 'jimin@gmail.com',
            'password'	=> bcrypt('jiminkorea'),
            'role' => 'user'
        ]);
        \App\Aduan::create([
            'nama' => 'Andika',
            'nik'	=> '3201240508040004',
            'no_telp' => '089532632635',
            'lokasi' => 'Bogor',
            'aduan'	=> 'banjir',
            'image' => 'tes.png',
            'status'	=> 0
        ]);
        \App\Aduan::create([
            'nama' => 'adis',
            'nik'	=> '3201440902040004',
            'no_telp' => '089523434633',
            'lokasi' => 'Jakarta',
            'aduan'	=> 'longsor',
            'image' => 'longsor.png',
            'status'	=> 1
        ]);
        \App\Aduan::create([
            'nama' => 'jack',
            'nik'	=> '3201214503040005',
            'no_telp' => '089678932615',
            'lokasi' => 'Lampung',
            'aduan'	=> 'Kelaparan',
            'image' => 'kelaparan.png',
            'status'	=> 2
        ]);
    }
}
