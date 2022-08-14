<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(DepotsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(BookingsSeeder::class);
    }
}