<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'BR-Familie', 'remarks' => 'Kinder-, Heirats-Unterstützung', 'maxsupport' => '140', 'maxsupportperyear' => null, 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Events', 'remarks' => 'Kunden-Events, max. 2/Jahr', 'maxsupport' => '30', 'maxsupportperyear' => '30', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Kultur', 'remarks' => 'Kultur, max. 1 Begleitperson', 'maxsupport' => '40', 'maxsupportperyear' => '40', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Mobilität', 'remarks' => 'Jahreskarte, Vignette', 'maxsupport' => '40', 'maxsupportperyear' => '40', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Sport', 'remarks' => 'Sportl. Aktivität z.B. Fitness-Center', 'maxsupport' => '40', 'maxsupportperyear' => '40', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Weiterbildung', 'remarks' => 'z.B. Kurse, FH-Ausbildung', 'maxsupport' => '40', 'maxsupportperyear' => '40', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Kultur/Sport', 'remarks' => null, 'maxsupport' => '40', 'maxsupportperyear' => '70', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Mobilität/Sport', 'remarks' => null, 'maxsupport' => '40', 'maxsupportperyear' => '70', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Mobilität/Kultur', 'remarks' => null, 'maxsupport' => '40', 'maxsupportperyear' => '70', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Förderung-Kultur/Sport/Weiterbildung', 'remarks' => null, 'maxsupport' => '40', 'maxsupportperyear' => '70', 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'BR-Norfallhilfe', 'remarks' => 'nach BR-Beschluss', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '1', 'active' => '1']);
        Category::create(['name' => 'Abschöpfer', 'remarks' => null, 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Bank-Spesen', 'remarks' => null, 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Bank-Zinsen', 'remarks' => null, 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'BR-Spesen', 'remarks' => 'Taxi, Hotel, Km-Geld, etc.', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'BR-Umlage-Extern', 'remarks' => 'Beteiligung an der BR-Umlage beim Beschäftiger', 'maxsupport' => null, 'is_employee_support'=> '0','maxsupportperyear' => null, 'active' => '1']);
        Category::create(['name' => 'Einkauf', 'remarks' => 'Einkauf durch BR z.B. Gutscheine', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Fehlbuchung', 'remarks' => 'Fehlbuchung, Storno', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Gebühren', 'remarks' => null, 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'IVM', 'remarks' => 'BR-Umlage, Zuschuss', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Steuer', 'remarks' => 'z.B. Kest', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'Übertrag/EA', 'remarks' => 'zw. Konto und Handkassa', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
        Category::create(['name' => 'AK-Prüfung', 'remarks' => 'gibt an, dass an diesem Datum eine AK-Prüfung stattfand um den Zeiraum für die Ausgabe einzugrenzen', 'maxsupport' => null, 'maxsupportperyear' => null, 'is_employee_support'=> '0', 'active' => '1']);
    }
}
