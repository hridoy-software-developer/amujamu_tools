<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pricing', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('price_category_id')->nullable()->index('IDX_2A4C95AF159FD1F4');
			$table->integer('tour_id')->nullable()->index('IDX_2A4C95AF15ED8D43');
			$table->integer('tour_day_id')->nullable()->index('IDX_2A4C95AF3C4CA6CC');
			$table->integer('local_user')->nullable();
			$table->integer('local_agent')->nullable();
			$table->integer('foreign_user')->nullable();
			$table->integer('foreign_agent')->nullable();
			$table->integer('aj_local_user')->nullable();
			$table->integer('aj_local_agent')->nullable();
			$table->integer('aj_foreign_agent')->nullable();
			$table->integer('aj_foreign_user')->nullable();
			$table->softDeletes();
			$table->integer('market_price')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pricing');
	}

}
