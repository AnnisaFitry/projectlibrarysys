<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemberitahuan = [
            ['isi' => 'Buku Telah Berhasil Dipimjam!'],
            ['isi' => 'Hari ini, waktunya mengembalikan bukumu!'],
            ['isi' => 'Kamu terlambat mengembalikan buku nihh, segera kembalikan ya!'],
        ];
        DB::table('pemberitahuan')->insert($pemberitahuan);
    }
}
