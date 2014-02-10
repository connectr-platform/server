<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndentitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indentities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username');
			$table->string('tracker');
			$table->string('uuid');
			$table->string('name');
			$table->integer('age');
			$table->string('bio');
			$table->string('gender');
			$table->integer('pic');
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
		Schema::drop('indentities');
	}

}
