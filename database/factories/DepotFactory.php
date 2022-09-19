<?php

namespace Database\Factories;
use DateInterval;
use App\Models\Depot;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depot>
 */
class DepotFactory extends Factory
{
    private static $order = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $crd = fake()->dateTimeBetween('-50 week', '-1 week');
        $udd = $crd->add(new DateInterval('PT3H5M'));
        if(self::$order == 1){
            $bank = 'Handkassa';
            $blz = null;
            $name = $bank;
            $num = null;
            $excelname = $bank;
            $acc_type = $bank;
            $active = true;
        }   
        elseif(self::$order == 2){
            // Depot::create(['name' => '00404023509', 'bank_name' => 'Bank Austria', 'blz' => '12000', 'accountType' => 'Konto', 'excelName' => 'BA-Konto 00404023509', 'excelSort' => '3', 'remarks' => null, 'active' => '1']);
            $bank = 'Bank Austria';
            $blz = '12000';
            $name = config('app.baca_depot');
            $num = config('app.baca_depot');
            $excelname = 'BA-Konto ' . config('app.baca_depot');
            $acc_type = 'Konto';
            $active = true;
        }   
        else{
            $acc_type = fake()->randomElement(['Sparbuch', 'Konto']);
            $blz = fake()->randomElement([12000,20111]);
            if($blz==12000)
                $bank = 'Bank Austria';
            else
                $bank = 'Erste Bank';
            $num = fake()->numerify('###########');
            $name = $num;
            $excelname = $acc_type . ' ' . $num;
            $active = fake()->boolean();
        }
        return [
            'name' => $name,
            'bank_name' => $bank,
            'blz' => $blz,
            'accountType' => $acc_type,
            'excelName' => $excelname,
            'excelSort' => self::$order++,
            'remarks' => null,
            'active' => $active,
            'deleted_at' => NULL,
            'created_at' => $crd,
            'updated_at' => $udd,
        ];

    }
}
