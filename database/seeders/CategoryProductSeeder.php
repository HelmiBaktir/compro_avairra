<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
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
                'name'       => 'Handphone',
                'desc' => 'Deskripsi Handphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'Laptop',
                'desc' => 'Deskripsi Laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'Baju',
                'desc' => 'Deskripsi Baju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('categories')->insert($roles);
    }
}
