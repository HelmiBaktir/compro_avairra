<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->delete();
        $admin = User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('p@ssw0rd'),
            'email_verified_at' => now()
        ]);

        $admin->assignRole('admin');

        $staf = User::create([
            'name'          => 'Gibran',
            'email'         => 'gibran@gmail.com',
            'password'      => bcrypt('p@ssw0rd'),
            'email_verified_at' => now()
        ]);

        $staf->assignRole('staff');
    }
}
