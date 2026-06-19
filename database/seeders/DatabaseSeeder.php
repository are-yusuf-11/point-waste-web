<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. MATIKAN pengecekan foreign key sementara (Biar lolos dari error 1701)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // 2. Kosongkan tabel (Sekarang ini dijamin aman)
        DB::table('users')->truncate();
        DB::table('rt')->truncate();

        // 3. Masukkan 1 data master RT
        DB::table('rt')->insert([
            'id_rt'     => 1,
            'no_rt'     => 'RT 001',
            'kelurahan' => 'Cikarang Kota',
            'kecamatan' => 'Cikarang Utara',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        // 4. Masukkan masing-masing 1 user per role
        $users = [
            // Role: Admin
            [
                'nama'              => 'Admin Utama',
                'email'             => 'admin@pointwaste.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('admin123'),
                'role'              => 'Admin',
                'no_hp'             => '081122334455',
                'alamat'            => 'Kantor Pusat Cikarang',
                'total_poin'        => 0,
                'id_rt'             => null,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            // Role: Pengurus RT
            [
                'nama'              => 'Ketua RT 001',
                'email'             => 'pengurus@pointwaste.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('rt123'),
                'role'              => 'Pengurus RT',
                'no_hp'             => '085711223344',
                'alamat'            => 'Jl. Mangga No. 1, RT 001',
                'total_poin'        => 0,
                'id_rt'             => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            // Role: Warga
            [
                'nama'              => 'Ahmad Warga',
                'email'             => 'warga@pointwaste.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('warga123'),
                'role'              => 'Warga',
                'no_hp'             => '081299887766',
                'alamat'            => 'Kavling Burangrang No. 12',
                'total_poin'        => 500,
                'id_rt'             => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ];

        DB::table('users')->insert($users);

        // 5. HIDUPKAN KEMBALI pengecekan foreign key (Wajib demi keamanan database)
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}