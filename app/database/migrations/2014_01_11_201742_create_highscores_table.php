<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighscoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('highscores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username_and_fullname');
			$table->string('playing_as');
			$table->bigInteger('rounds');
			$table->bigInteger('kills');
			$table->bigInteger('assists');
			$table->bigInteger('downs');
			$table->bigInteger('revives');
			$table->string('played_for');
			$table->string('death_by');
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
		Schema::drop('highscores');
	}

}
