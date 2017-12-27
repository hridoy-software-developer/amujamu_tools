<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTourdayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tourday', function(Blueprint $table)
		{
			$table->foreign('tour_id', 'FK_61FC1E9F15ED8D43')->references('id')->on('tour')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tourday', function(Blueprint $table)
		{
			$table->dropForeign('FK_61FC1E9F15ED8D43');
		});
	}

}
