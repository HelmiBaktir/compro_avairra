<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'image_path' => 'banner/Home/projo-bikin-spanduk-digital-kita-indonesia-kita-prabowo-gibran-dok-istimewa_169.jpeg',
                'posision' => 'home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'banner/Home/080291100_1697628967-Banner_Infografis_Jelang_Pendaftaran_Capres-Cawapres__Mahfud_MD_Diumumkan_Jadi_Cawapres_Ganjar.jpg',
                'posision' => 'home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'banner/Home/anies-baswedan-dan-muhaimin-iskandar_169.jpeg',
                'posision' => 'home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'banner/Home/Logo-Partai-Politik-PDIP.png',
                'posision' => 'home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'banner/About_Us_1/image.jpg',
                'posision' => 'About_Us_1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_path' => 'banner/About_Us_2/pasangan-prabowo-subianto-dan-gibran-rakabuming-raka-saat-menghadiri-deklarasi-capres-cawapres-di-indonesia-arena-jakarta-rabu-5_169.jpg',
                'posision' => 'About_Us_2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('banners')->insert($roles);
    }
}
