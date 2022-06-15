<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('phone2');
            $table->string('addres');
            $table->string('map')->nullable();
            $table->string('twiter');
            $table->string('facebook');
            $table->string('pinterest')->nullable();
            $table->string('instagram');
            $table->string('youtube');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
