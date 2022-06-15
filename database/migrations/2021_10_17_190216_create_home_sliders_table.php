<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('price');
            $table->string('link');
            $table->enum('status' , ['active' , 'inactive']);
            $table->string('image');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('home_sliders');
    }
}
