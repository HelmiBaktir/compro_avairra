<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SosialMedia extends Model
{
    protected $table = 'sosial_medias';
    use SoftDeletes;
    use HasFactory;

    public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
