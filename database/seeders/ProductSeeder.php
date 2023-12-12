<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'series_product' => 'SeriesA',
                'name_product' => 'Produk A',
                'desc' => 'Deskripsi Produk A',
                'image_product' => 'path/to/imageA.jpg',
                'category_id' => 1, // Sesuaikan dengan ID kategori yang ada
            ],
            [
                'series_product' => 'SeriesB',
                'name_product' => 'Produk B',
                'desc' => 'Deskripsi Produk B',
                'image_product' => 'path/to/imageB.jpg',
                'category_id' => 2, // Sesuaikan dengan ID kategori yang ada
            ],
            [
                'series_product' => 'SeriesC',
                'name_product' => 'Produk C',
                'desc' => 'Deskripsi Produk C',
                'image_product' => 'path/to/imageC.jpg',
                'category_id' => 3, // Sesuaikan dengan ID kategori yang ada
            ],
            [
                'series_product' => 'SeriesD',
                'name_product' => 'Produk D',
                'desc' => 'Deskripsi Produk D',
                'image_product' => 'path/to/imageD.jpg',
                'category_id' => 1, // Sesuaikan dengan ID kategori yang ada
            ],
            [
                'series_product' => 'SeriesE',
                'name_product' => 'Produk E',
                'desc' => 'Deskripsi Produk E',
                'image_product' => 'path/to/imageE.jpg',
                'category_id' => 2, // Sesuaikan dengan ID kategori yang ada
            ],
            [
                'series_product' => 'SeriesF',
                'name_product' => 'Produk F',
                'desc' => 'Deskripsi Produk F',
                'image_product' => 'path/to/imageF.jpg',
                'category_id' => 3, // Sesuaikan dengan ID kategori yang ada
            ],

        ]);
    }
}
