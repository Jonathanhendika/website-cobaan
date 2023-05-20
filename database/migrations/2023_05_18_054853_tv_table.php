<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TVTable extends Migration
{
    public function up()
    {
        Schema::create('daftar_tv', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_tv');
            $table->integer('watt');
            $table->integer('lama_penggunaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar_tv');
    }
}
