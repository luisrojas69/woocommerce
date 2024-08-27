<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => fake()->randomNumber(5),
            'name' => fake()->text(20),
            'description' => fake()->sentence(100),
            'qty' => fake()->numberBetween($min = 0, $max = 99),
            'price' => fake()->numberBetween($min = 10, $max = 399),
        ];
    }
}
