<?php

namespace Database\Factories;
use App\Models\Flight;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'from' => $this->faker->city,
            'to' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'number_of_passengers' => $this->faker->numberBetween(1, 300),
            'display' => $this->faker->boolean,
            'date' => $this->faker->date,
            'travel' => $this->faker->randomElement(['one way', 'multiplicity', 'round trip']),
        ];
    }
}
