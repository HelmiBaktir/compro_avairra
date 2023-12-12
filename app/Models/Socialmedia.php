<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socialmedia
 * 
 * @property int $id
 * @property int|null $company_id
 * @property string $platform
 * @property string $link
 * 
 * @property Company|null $company
 *
 * @package App\Models
 */
class Socialmedia extends Model
{
	protected $table = 'socialmedia';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'platform',
		'link'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
