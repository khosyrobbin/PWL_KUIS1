<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'images/service_01.jpg',
                'nama_barang' => 'Sepatu',
                'jenis_barang' => 'Perlengkapan sekolah',
                'harga' => '200000'
            ],
            [
                'image' => 'images/service_02.jpg',
                'nama_barang' => 'Pulpen',
                'jenis_barang' => 'ATK',
                'harga' => '2000'
            ],
            [
                'image' => 'images/service_03.jpg',
                'nama_barang' => 'Buku',
                'jenis_barang' => 'ATK',
                'harga' => '5000'
            ]

        ];
        DB::table('barang')->insert($data);
    }
}
