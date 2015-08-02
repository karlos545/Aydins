<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile_number');
            $table->string('landline_number');
            $table->string('name_or_number');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('town_city');
            $table->string('postcode');

            $table->rememberToken();
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
        Schema::drop('users_contact');
    }
}
