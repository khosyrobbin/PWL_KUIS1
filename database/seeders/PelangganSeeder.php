<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'nama_pelanggan' => 'Rahma',
                'alamat' => 'Lumajang',
                'no_hp' => '081632321'
            ],
            [
                'nama_pelanggan' => 'Robbin',
                'alamat' => 'Jember',
                'no_hp' => '086323211'
            ],
            [
                'nama_pelanggan' => 'Toni',
                'alamat' => 'Ponorogo',
                'no_hp' => '084423333'
            ]

        ];
        DB::table('pelanggan')->insert($data);
    }
}
