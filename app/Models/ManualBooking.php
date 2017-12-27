<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 26 Dec 2017 11:19:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ManualBooking
 * 
 * @property int $id
 * @property string $booking_code
 * @property int $tours_id
 * @property string $tour_date
 * @property float $total_price
 * @property string $payment_status
 * @property string $payment_link
 * @property float $paid_amount
 * @property float $due_amount
 * @property string $full_name
 * @property string $email
 * @property string $nationality
 * @property string $contact
 * @property string $status
 * @property int $created_by
 * @property int $updated_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class ManualBooking extends Eloquent
{
	protected $casts = [
		'tours_id' => 'int',
		'total_price' => 'float',
		'paid_amount' => 'float',
		'due_amount' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'booking_code',
		'tours_id',
		'tour_date',
		'total_price',
		'payment_status',
		'payment_link',
		'paid_amount',
		'due_amount',
		'full_name',
		'email',
		'nationality',
		'contact',
		'status',
		'created_by',
		'updated_by'
	];
}
