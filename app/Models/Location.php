<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 20 Dec 2017 07:03:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Location
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Location extends Eloquent
{
	protected $fillable = [
		'name',
		'description'
	];
}
