<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourdayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tourday', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tour_id')->index('IDX_61FC1E9F15ED8D43');
			$table->date('tour_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tourday');
	}

}
