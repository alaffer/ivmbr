<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'User']);       //1
        Role::create(['name' => 'BR-Kassier']); //2
        Role::create(['name' => 'BR-Vorsitz']); //3
    }
}