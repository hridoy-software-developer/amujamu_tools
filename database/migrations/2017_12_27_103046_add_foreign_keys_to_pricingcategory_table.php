<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPricingcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pricingcategory', function(Blueprint $table)
		{
			$table->foreign('tour_id', 'FK_C24C2A9E15ED8D43')->references('id')->on('tour')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pricingcategory', function(Blueprint $table)
		{
			$table->dropForeign('FK_C24C2A9E15ED8D43');
		});
	}

}
