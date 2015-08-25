<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToppingsPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('toppings_price', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('7');
            $table->integer('10');
            $table->integer('12');
            $table->integer('14');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('toppings_price');
    }
}
