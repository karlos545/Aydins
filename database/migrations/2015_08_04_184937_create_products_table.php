<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50)->unique();
			$table->integer('category_id')->unsigned();
			$table->boolean('vegetarian');
			$table->integer('spicy');
			$table->text('desc');
			$table->string('img_path');

		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}