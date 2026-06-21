<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id_kategori'   => 1, // Diubah menjadi angka agar sinkron dengan migration id()
                'nama_kategori' => 'Plastik',
                'deskripsi'     => 'Botol, kantong, dan kemasan plastik',
                'poin_per_kg'   => 100,
                'status_aktif'  => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'id_kategori'   => 2,
                'nama_kategori' => 'Kertas',
                'deskripsi'     => 'Kertas bekas, koran, kardus',
                'poin_per_kg'   => 80,
                'status_aktif'  => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'id_kategori'   => 3,
                'nama_kategori' => 'Logam',
                'deskripsi'     => 'Kaleng, besi, aluminium',
                'poin_per_kg'   => 150,
                'status_aktif'  => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'id_kategori'   => 4,
                'nama_kategori' => 'Kaca',
                'deskripsi'     => 'Botol kaca dan pecahan kaca',
                'poin_per_kg'   => 90,
                'status_aktif'  => true,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        DB::table('kategori_sampah')->insert($categories);
    }
}