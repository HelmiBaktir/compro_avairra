<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
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
                'name' => 'PT. Avairra Indo Karya',
                'email' => 'adnan@avairra.co.id',
                'phone_number' => '6282229372706',
                'address' => 'Jl. Parangkusumo No 9i, Surabaya//Jl. Tebet Timur Dalam XC No. 9, Jakarta Selatan',
                'registerCode' => 'AVA123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('companies')->insert($roles);
    }
}
