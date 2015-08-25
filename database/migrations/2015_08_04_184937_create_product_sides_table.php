<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSidesTable extends Migration {

	public function up()
	{
		Schema::create('product_sides', function(Blueprint $table) {
			$table->integer('product_id')->unsigned();
			$table->boolean('salad');
			$table->boolean('sauce');
			$table->boolean('toppings');
		});
	}

	public function down()
	{
		Schema::drop('product_sides');
	}
}