<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('quantity')->default(1);
            $table->string('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('offer_price')->default(0);
            $table->integer('catagory_id')->unsigned()->default(0);
            $table->integer('brand_id')->unsigned()->default(1);
            $table->foreign('catagory_id')->references('id')->on('catagories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
