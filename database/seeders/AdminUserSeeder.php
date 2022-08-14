<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'     => 'Br-Vorsitz',
            'email'    => 'br-vorsitz@ivm.at',
            'password' => bcrypt('password'),
            'role_id'  => 3,
        ]);

        User::create([
            'name'     => 'Br-Kassier',
            'email'    => 'br-kassier@ivm.at',
            'password' => bcrypt('password'),
            'role_id'  => 2,
        ]);

        User::create([
            'name'     => 'Br-Mitglied',
            'email'    => 'br-user@ivm.at',
            'password' => bcrypt('password'),
            'role_id'  => 1,
        ]);
    }
}