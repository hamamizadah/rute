<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rute_id');
            $table->string('photo_url');
            $table->timestamps();

            $table->foreign('rute_id')->references('id')->on('rute');
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto');
    }
}
