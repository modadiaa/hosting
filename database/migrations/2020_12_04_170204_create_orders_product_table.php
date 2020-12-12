<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //orders_product
        Schema::create('order_model_products_model', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total');
//            $table->integer('tax');
            $table->integer('products_model_id');
            $table->integer('order_model_id');
            $table->integer('qty');
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
        Schema::dropIfExists('order_model_products_model');
    }
}
/// orders_product