<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCatigoriesTable extends Migration
{

    public function up()
    {
        Schema::create('home_catigories', function (Blueprint $table) {
            $table->id();
            $table->string('sel_catigories');
            $table->integer('no_of_products');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('home_catigories');
    }
}
