<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property Carbon|null $created_at
 * @property Carbon|null $update_at
 * 
 * @property Collection|Socialmedia[] $socialmedia
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'company';
	public $timestamps = false;

	protected $casts = [
		'update_at' => 'datetime'
	];

	protected $fillable = [
		'name',
		'email',
		'phone_number',
		'address',
		'update_at'
	];

	public function socialmedia()
	{
		return $this->hasMany(Socialmedia::class);
	}
}
