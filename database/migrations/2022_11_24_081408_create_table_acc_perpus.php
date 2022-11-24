<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAccPerpus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_perpus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perpus')->nullable();
            $table->foreign('id_perpus')->references('id')->on('detail_perpus')->onDelete('cascade');
            $table->unsignedBigInteger('is_admin')->nullable();
            $table->foreign('is_admin')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->string('pesan')->nullable();
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
        Schema::dropIfExists('acc_perpus');
    }
}
