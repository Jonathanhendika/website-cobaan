<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AirTable extends Migration
{
    public function up()
    {
        Schema::create('listrik_air', function (Blueprint $table) {
            $table->id();
            $table->integer('watt');
            $table->integer('lama_penggunaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listrik_air');
    }
}
