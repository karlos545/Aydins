<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductMapTable extends Migration {

	public function up()
	{
		Schema::create('product_map', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id')->unsigned();
			$table->string('size');
			$table->integer('price');
			$table->boolean('active')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('product_map');
	}
}