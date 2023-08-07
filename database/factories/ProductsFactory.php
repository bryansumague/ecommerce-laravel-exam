<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'sku' => fake()->randomLetter(),
            'price' => fake()->randomElement([10, 20, 30, 40, 50]),
            'quantity' => fake()->randomElement([100, 200, 300, 400, 500]),
        ];
    }
}
