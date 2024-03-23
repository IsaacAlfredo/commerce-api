<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, User::count()),
            'user_name' => fake()->name(),
            'address' => fake()->numerify('########'),
            'cardNumber' => fake()->numerify('################'),
            'cardValidity' => fake()->numerify('########'),
            'cardSecurityCode' => fake()->numerify('###')
        ];
    }
}
