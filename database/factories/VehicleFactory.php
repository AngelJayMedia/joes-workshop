<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['mazda', 'toyota', 'jeep', 'cryslar', 'tata', 'bmw']),
            'color' => $this->faker->randomElement(['blue', 'white', 'silver', 'black', 'yellow']),
            'body_type' => $this->faker->randomElement(['hatchback, sedan', 'suv']),
            'reg_number' => $this->faker->postcode,
            'VIN_number' => Str::random(10),
            'user_id' => rand(1, 8),
        ];
    }
}
