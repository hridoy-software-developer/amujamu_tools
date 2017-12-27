<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManualBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manual_bookings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('booking_code', 150);
			$table->integer('tours_id');
			$table->string('tour_date', 150);
			$table->decimal('total_price', 11);
			$table->string('payment_status', 50);
			$table->text('payment_link', 65535)->nullable();
			$table->decimal('paid_amount', 11);
			$table->decimal('due_amount', 11);
			$table->string('full_name', 150)->nullable();
			$table->string('email', 150)->nullable();
			$table->string('nationality', 150)->nullable();
			$table->string('contact', 150)->nullable();
			$table->string('status', 150);
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
		Schema::drop('manual_bookings');
	}

}
