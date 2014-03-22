<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDb extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create feedback database
		Schema::create('feedback', function($table){
			$table->increments('id');
			$table->string('identifier', 255);
			$table->text('feedback');
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
		// Drop feedback database
		Schema::drop('feedback');
	}
}
