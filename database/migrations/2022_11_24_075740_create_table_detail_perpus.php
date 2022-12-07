<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailPerpus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_perpus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_perpus');
            $table->string('foto_perpus');
            $table->string('alamat_perpus');
            $table->unsignedBigInteger('id_kota');
            $table->foreign('id_kota')->references('id')->on('kota');
            $table->string('telp');
            $table->string('bio')->nullable();
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
        Schema::dropIfExists('detail_perpus');
    }
}
