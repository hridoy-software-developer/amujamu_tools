<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricingcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pricingcategory', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tour_id')->nullable()->index('IDX_C24C2A9E15ED8D43');
			$table->string('title');
			$table->softDeletes();
			$table->text('shortDescription')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pricingcategory');
	}

}
