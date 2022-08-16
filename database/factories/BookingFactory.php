<?php

namespace Database\Factories;

use App\Models\Depot;
use App\Models\Category;
use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $crd = fake()->dateTimeBetween('-50 week', '-1 week');
        $udd = $crd->add(new DateInterval('PT3H5M'));
        $cat = Category::pluck('id')->random();
        if($cat==19){
            $dep = null;
            $pi = null;
            $po = null;
            $pers = null;
        }
        else{
            $dep = Depot::pluck('id')->random();
            $pipo = fake()->numberBetween($min = 0, $max = 100);
            if($pipo>94){
                $pi = fake()->numberBetween($min = 0, $max = 1000);
                $cat = 16;
                $po = null;
                $pers = null;
            }
            else{
                $po = fake()->numberBetween($min = 0, $max = 100);
                $pi = null;
                if($cat == 16)
                    $cat = Category::pluck('id')->random();
                $pers = fake()->name();
            }
        }
        return [
            'depot_id' => $dep,
            'category_id' => $cat,
            'date' => fake()->dateTimeBetween('-100 week', '-51 week'),
            'purpose' => fake()->text(30),
            'support_year' => NULL,
            'payin' => $pi ,
            'payout' => $po ,
            'person' => $pers,
            'remarks' => '',
            'deleted_at' => NULL,
            'created_at' => $crd,
            'updated_at' => $udd,
        ];
    }
}
