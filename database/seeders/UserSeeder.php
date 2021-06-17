<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Customer',
            'email'     => 'customer@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::CUSTOMER,
        ]);

        User::factory()
            ->count(10)
            ->create();

        User::factory()
            ->count(10)
            ->has(Vehicle::factory()->count(2))
            ->create();

        User::factory()
            ->count(10)
            ->has(Vehicle::factory()->count(3))
            ->create();

        User::factory()
            ->count(10)
            ->has(Vehicle::factory()->count(5))
            ->create();
    }
}
