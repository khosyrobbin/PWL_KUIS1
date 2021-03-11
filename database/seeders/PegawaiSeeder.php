<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'nama_pegawai' => 'Tasya',
                'jenis_kelamin' => 'Perempuan',
                'alamat_pegawai' => 'Lumajang',
                'no_hp_pegawai' => '08141333'
            ],
            [
                'nama_pegawai' => 'Khosy',
                'jenis_kelamin' => 'Pria',
                'alamat_pegawai' => 'Surabaya',
                'no_hp_pegawai' => '08121311'
            ],
            [
                'nama_pegawai' => 'Herman',
                'jenis_kelamin' => 'Pria',
                'alamat_pegawai' => 'Malang',
                'no_hp_pegawai' => '08223333'
            ]

        ];
        DB::table('pegawai')->insert($data);
    }
}
