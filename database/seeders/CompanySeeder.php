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
                'name'       => 'PT. Sukses',
                'email' => 'sukses@gmail.com',
                'phone_number' => '0812345//0312312',
                'address' => 'Jl. Numpang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('companies')->insert($roles);
    }
}
