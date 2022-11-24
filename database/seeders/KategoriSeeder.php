<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Majalah'],
            ['nama_kategori' => 'Kamus'],
            ['nama_kategori' => 'Komik'],
            ['nama_kategori' => 'Ensiklopedia'],
            ['nama_kategori' => 'Biografi'],
            ['nama_kategori' => 'Buku Pelajaran'],
            ['nama_kategori' => 'Buku Ilmiyah'],
            ['nama_kategori' => 'Naskah'],
        ];
        DB::table('kategori')->insert($kategori);
    }
}
