<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbudemenTable extends Migration
{
    public function up()
    {
        Schema::create('abudemen', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_abudemen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abudemen');
    }
}
