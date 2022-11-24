<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = [
            ['nama_kota' => 'Kota Probolinggo'],
            ['nama_kota' => 'Kota Pasuruan'],
            ['nama_kota' => 'Kota Malang'],
            ['nama_kota' => 'Kota Batu'],
            ['nama_kota' => 'Kota Mojokerto'],
            ['nama_kota' => 'Kota Surabaya'],
            ['nama_kota' => 'Kota Kediri'],
            ['nama_kota' => 'Kota Blitar'],
            ['nama_kota' => 'Kota Madiun'],
        ];
        DB::table('kota')->insert($kota);
    }
}
