<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 10);
            $table->string('judul_buku', 300);
            $table->string('isbn', 300);
            $table->string('pengarang', 300);
            $table->string('penerbit', 300);
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->unsignedBigInteger('id_perpus');
            $table->foreign('id_perpus')->references('id')->on('detail_perpus')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
