<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pricing', function(Blueprint $table)
		{
			$table->foreign('price_category_id', 'FK_2A4C95AF159FD1F4')->references('id')->on('pricingcategory')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tour_id', 'FK_2A4C95AF15ED8D43')->references('id')->on('tour')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tour_day_id', 'FK_2A4C95AF3C4CA6CC')->references('id')->on('tourday')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pricing', function(Blueprint $table)
		{
			$table->dropForeign('FK_2A4C95AF159FD1F4');
			$table->dropForeign('FK_2A4C95AF15ED8D43');
			$table->dropForeign('FK_2A4C95AF3C4CA6CC');
		});
	}

}
