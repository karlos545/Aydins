<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaucesTable extends Migration {

	public function up()
	{
		Schema::create('sauces', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->boolean('vegetarian');
			$table->integer('spicy');
		});
	}

	public function down()
	{
		Schema::drop('sauces');
	}
}