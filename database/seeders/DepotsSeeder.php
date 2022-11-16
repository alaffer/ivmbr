<?php

namespace Database\Seeders;

use App\Models\Depot;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Depot::factory()->count(6)->create();

        Depot::create(['name' => 'Handkassa', 'bank_name' => 'Handkassa', 'blz' => null, 'accountType' => 'Handkassa', 'excelName' => 'Handkassa', 'excelSort' => '1', 'remarks' => null, 'active' => '1']);
        Depot::create(['name' => '00204046577', 'bank_name' => 'Bank Austria', 'blz' => '12000', 'accountType' => 'Sparbuch', 'excelName' => 'Sparbuch  00204046577', 'excelSort' => '2', 'remarks' => null, 'active' => '1']);
        Depot::create(['name' => '00404023509', 'bank_name' => 'Bank Austria', 'blz' => '12000', 'accountType' => 'Konto', 'excelName' => 'BA-Konto 00404023509', 'excelSort' => '3', 'remarks' => null, 'active' => '1']);
        Depot::create(['name' => '55066046081', 'bank_name' => 'Bank Austria', 'blz' => '12000', 'accountType' => 'Sparbuch', 'excelName' => 'Sparbuch 55066046081', 'excelSort' => '4', 'remarks' => null, 'active' => '0']);
        Depot::create(['name' => 'BAWAG-Konto', 'bank_name' => 'BAWAG', 'blz' => '14000', 'accountType' => 'Sparbuch', 'excelName' => 'Bawag-Konto', 'excelSort' => '5', 'remarks' => null, 'active' => '0']);
        Depot::create(['name' => '56167138611', 'bank_name' => 'Bank Austria', 'blz' => '12000', 'accountType' => 'Sparbuch', 'excelName' => 'Sparbuch 56167138611', 'excelSort' => '6', 'remarks' => null, 'active' => '0']);
    }
}
