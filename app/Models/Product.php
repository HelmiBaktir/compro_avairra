<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    public static function generateProductNumber()
	{
		$current_time = now()->format('Ymd');
		$latestProduct = static::where('created_at', 'LIKE', $current_time.'%')->max(DB::raw('CAST(SUBSTRING(nomor_product, -3) AS UNSIGNED)')) + 1;
	
		// Generate nomor produk dengan format 'PRDT' + tanggal terakhir dibuat + nomor urut yang terus bertambah
		return 'PRDT' . $current_time . str_pad($latestProduct, 3, "0", STR_PAD_LEFT);
	}
}
