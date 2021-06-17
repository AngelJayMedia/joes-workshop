<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_date'  => $this->faker->dateTimeThisMonth(),
            'status'        => $this->faker->randomElement(['received, in-progress', 'completed']),
            'vehicle_id'    => rand(1, 8),
        ];
    }
}
