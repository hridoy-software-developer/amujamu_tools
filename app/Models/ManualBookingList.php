<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 26 Dec 2017 11:19:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ManualBookingList
 * 
 * @property int $id
 * @property string $booking_code
 * @property int $package_id
 * @property string $currency
 * @property float $price
 * @property float $quantity
 * @property float $total_price
 * @property \Carbon\Carbon $created_by
 * @property \Carbon\Carbon $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class ManualBookingList extends Eloquent
{
	protected $casts = [
		'package_id' => 'int',
		'price' => 'float',
		'quantity' => 'float',
		'total_price' => 'float',
		'created_at' => 'int',
		'updated_at' => 'int'
	];

	protected $dates = [
		'created_by',
		'updated_by'
	];

	protected $fillable = [
		'booking_code',
		'package_id',
		'currency',
		'price',
		'quantity',
		'total_price',
		'created_by',
		'updated_by'
	];
}
