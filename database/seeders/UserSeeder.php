<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed karyawan
        $admin = User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'admin',
        ]);
        $admin->karyawan()->create([
            'nama_karyawan' => 'Admin',
            'jabatan' => 'administrasi',
        ]);

        $bendahara = User::create([
            'email' => 'bendahara@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'bendahara',
        ]);
        $bendahara->karyawan()->create([
            'nama_karyawan' => 'Bendahara',
            'jabatan' => 'bendahara',
        ]);

        $pemilik = User::create([
            'email' => 'pemilik@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'pemilik',
        ]);
        $pemilik->karyawan()->create([
            'nama_karyawan' => 'Pemilik',
            'jabatan' => 'pemilik'
        ]);

        // Seed pelanggan
        $pelanggan = User::create([
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'pelanggan',
        ]);
        $pelanggan->pelanggan()->create([
            'nama_lengkap' => 'Pelanggan Setia',
            'no_hp' => '088888888888'
        ]);
    }
}
