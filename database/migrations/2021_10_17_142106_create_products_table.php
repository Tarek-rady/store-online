<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->decimal('sel_price')->default(0);
            $table->decimal('SKU');
            $table->enum('stock_status' ,['instock' , 'outofstock'] );
            $table->decimal('quantity');
            $table->string('image');
            $table->text('images')->nullable();
            $table->foreignId('catigori_id')->references('id')->on('catigories');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
