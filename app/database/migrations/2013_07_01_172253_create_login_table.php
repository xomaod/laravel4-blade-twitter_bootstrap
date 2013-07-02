<?php

use Illuminate\Database\Migrations\Migration;

class CreateLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('login', function($table)
	    {
	        $table->increments('id');
	        $table->string('user');
	        $table->timestamps();
	    });
	}

	public function down()
	{
	    Schema::drop('login');
	}

}