<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KipasTable extends Migration
{
    public function up()
    {
        Schema::create('daftar_kipas', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_kipas');
            $table->integer('watt');
            $table->integer('lama_penggunaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar_kipas');
    }
}
