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
        return [
            'depot_id' => Depot::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'date' => fake()->dateTimeBetween('-100 week', '-51 week'),
            'purpose' => fake()->text(30),
            'support_year' => NULL,
            'payin' => fake()->numberBetween($min = 0, $max = 100) ,
            'payout' => fake()->numberBetween($min = 0, $max = 100) ,
            'person' => fake()->name(),
            'remarks' => '',
            'deleted_at' => NULL,
            'created_at' => $crd,
            'updated_at' => $udd,
        ];
    }
}
