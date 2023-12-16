<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
	use SoftDeletes;
	use HasFactory;

    public static function generateProductNumber()
	{
		$current_time = now()->format('Ymd');
		$latestProduct = static::where('created_at', 'LIKE', $current_time.'%')->max(DB::raw('CAST(SUBSTRING(nomor, -3) AS UNSIGNED)')) + 1;
		return 'PRDT' . $current_time . str_pad($latestProduct, 3, "0", STR_PAD_LEFT);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

}
