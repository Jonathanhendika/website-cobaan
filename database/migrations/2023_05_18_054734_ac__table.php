<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ACTable extends Migration
{
    public function up()
    {
        Schema::create('daftar_ac', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_ac');
            $table->integer('watt');
            $table->integer('lama_penggunaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daftar_ac');
    }
}
