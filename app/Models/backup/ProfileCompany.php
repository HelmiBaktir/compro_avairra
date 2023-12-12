<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfileCompany
 * 
 * @property int $id
 * @property string $name
 * @property string $short_desc
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ProfileCompany extends Model
{
	protected $table = 'profile_company';

	protected $fillable = [
		'name',
		'short_desc',
		'email'
	];
}
