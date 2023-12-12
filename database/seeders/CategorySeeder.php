<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Kategori 1',
                'desc' => 'Deskripsi kategori 1',
            ],
            [
                'name' => 'Kategori 2',
                'desc' => 'Deskripsi kategori 2',
            ],
            [
                'name' => 'Kategori 3',
                'desc' => 'Deskripsi kategori 3',
            ],
        ]);   
    }
}
