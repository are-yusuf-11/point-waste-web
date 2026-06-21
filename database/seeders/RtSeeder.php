<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel RT terlebih dahulu agar tidak bentrok ID saat di-seed ulang
        DB::table('rt')->truncate();

        $dataRt = [
            // --- CIKARANG UTARA ---
            [
                'id_rt'     => 1,
                'no_rt'     => 'RT 001',
                'kelurahan' => 'Cikarang Kota',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 2,
                'no_rt'     => 'RT 002',
                'kelurahan' => 'Cikarang Kota',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 3,
                'no_rt'     => 'RT 003',
                'kelurahan' => 'Mekarmukti',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 4,
                'no_rt'     => 'RT 004',
                'kelurahan' => 'Mekarmukti',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 5,
                'no_rt'     => 'RT 007',
                'kelurahan' => 'Simpangan',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 6,
                'no_rt'     => 'RT 012',
                'kelurahan' => 'Simpangan',
                'kecamatan' => 'Cikarang Utara',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // --- CIKARANG SELATAN ---
            [
                'id_rt'     => 7,
                'no_rt'     => 'RT 001',
                'kelurahan' => 'Cibatu',
                'kecamatan' => 'Cikarang Selatan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 8,
                'no_rt'     => 'RT 005',
                'kelurahan' => 'Cibatu',
                'kecamatan' => 'Cikarang Selatan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 9,
                'no_rt'     => 'RT 002',
                'kelurahan' => 'Pasirsari',
                'kecamatan' => 'Cikarang Selatan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 10,
                'no_rt'     => 'RT 003',
                'kelurahan' => 'Sukaresmi',
                'kecamatan' => 'Cikarang Selatan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // --- CIKARANG PUSAT ---
            [
                'id_rt'     => 11,
                'no_rt'     => 'RT 001',
                'kelurahan' => 'Sukamahi',
                'kecamatan' => 'Cikarang Pusat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 12,
                'no_rt'     => 'RT 004',
                'kelurahan' => 'Sukamahi',
                'kecamatan' => 'Cikarang Pusat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 13,
                'no_rt'     => 'RT 002',
                'kelurahan' => 'Jayamukti',
                'kecamatan' => 'Cikarang Pusat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 14,
                'no_rt'     => 'RT 009',
                'kelurahan' => 'Jayamukti',
                'kecamatan' => 'Cikarang Pusat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // --- CIKARANG BARAT ---
            [
                'id_rt'     => 15,
                'no_rt'     => 'RT 001',
                'kelurahan' => 'Telaga Asih',
                'kecamatan' => 'Cikarang Barat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 16,
                'no_rt'     => 'RT 006',
                'kelurahan' => 'Telaga Asih',
                'kecamatan' => 'Cikarang Barat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 17,
                'no_rt'     => 'RT 003',
                'kelurahan' => 'Wanasari',
                'kecamatan' => 'Cikarang Barat',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // --- CIKARANG TIMUR ---
            [
                'id_rt'     => 18,
                'no_rt'     => 'RT 002',
                'kelurahan' => 'Sertajaya',
                'kecamatan' => 'Cikarang Timur',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 19,
                'no_rt'     => 'RT 005',
                'kelurahan' => 'Sertajaya',
                'kecamatan' => 'Cikarang Timur',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id_rt'     => 20,
                'no_rt'     => 'RT 001',
                'kelurahan' => 'Jatireja',
                'kecamatan' => 'Cikarang Timur',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ];

        DB::table('rt')->insert($dataRt);
    }
}