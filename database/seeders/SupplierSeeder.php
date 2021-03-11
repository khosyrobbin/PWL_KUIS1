<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
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
                'nama_supplier' => 'Risa',
                'alamat_supplier' => 'Madiun',
                'no_hp_supplier' => '08161234',
                'jenis_kelamin_supplier' => 'Perempuan'
            ],
            [
                'nama_supplier' => 'Anton',
                'alamat_supplier' => 'Pacitan',
                'no_hp_supplier' => '08321234',
                'jenis_kelamin_supplier' => 'Pria'
            ],
            [
                'nama_supplier' => 'Widya',
                'alamat_supplier' => 'Bondowoso',
                'no_hp_supplier' => '08163234',
                'jenis_kelamin_supplier' => 'Perempuan'
            ]

        ];
        DB::table('supplier')->insert($data);
    }
}
