<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perpus')->nullable();
            $table->foreign('id_perpus')->references('id')->on('detail_perpus')->onDelete('cascade');
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->foreign('id_anggota')->references('id')->on('detail_user')->onDelete('cascade');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->integer('total_hari');
            $table->integer('biaya_denda_perhari');
            $table->boolean('status_pinjam')->default(0);
            $table->unsignedBigInteger('id_pemberitahuan')->nullable();
            $table->foreign('id_pemberitahuan')->references('id')->on('pemberitahuan')->onDelete('cascade');
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
        Schema::dropIfExists('peminjaman');
    }
}
