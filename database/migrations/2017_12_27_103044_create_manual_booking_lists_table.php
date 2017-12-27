<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManualBookingListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manual_booking_lists', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('booking_code', 250);
			$table->integer('package_id');
			$table->string('currency', 250);
			$table->float('price');
			$table->float('quantity');
			$table->float('total_price');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('manual_booking_lists');
	}

}
