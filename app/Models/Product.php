<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Product
 * 
 * @property string $nomor_product
 * @property string $series_product
 * @property string $name_product
 * @property string $desc
 * @property string $image_path
 * @property int $status_hapus
 * @property int $category_id
 * @property Carbon $created_at
 * @property Carbon $update_at
 * 
 * @property Category $category
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'nomor_product';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'status_hapus' => 'int',
		'category_id' => 'int',
		'update_at' => 'datetime'
	];

	protected $fillable = [
		'series_product',
		'name_product',
		'desc',
		'image_path',
		'status_hapus',
		'category_id',
		'update_at'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public static function generateProductNumber()
	{
		$current_time = now()->format('Ymd');
		$latestProduct = static::where('created_at', 'LIKE', $current_time.'%')->max(DB::raw('CAST(SUBSTRING(nomor_product, -3) AS UNSIGNED)')) + 1;
	
		// Generate nomor produk dengan format 'PRDT' + tanggal terakhir dibuat + nomor urut yang terus bertambah
		return 'PRDT' . $current_time . str_pad($latestProduct, 3, "0", STR_PAD_LEFT);
	}
}
