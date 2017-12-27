<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 27 Dec 2017 06:20:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $booking_code
 * @property string $name
 * @property string $email
 * @property string $nationality
 * @property string $contact_no
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $fillable = [
		'booking_code',
		'name',
		'email',
		'nationality',
		'contact_no'
	];
}
