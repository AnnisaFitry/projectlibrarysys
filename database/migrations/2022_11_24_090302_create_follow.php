<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perpus')->nullable();
            $table->foreign('id_perpus')->references('id')->on('detail_perpus')->onDelete('cascade');
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->foreign('id_anggota')->references('id')->on('detail_user')->onDelete('cascade');
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
        Schema::dropIfExists('follow');
    }
}
