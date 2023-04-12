<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prouct>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->words(3, true),
            'image' => fake()->words(150, true),
            'brand' => fake()->company,
            'price' => fake()->randomFloat(2, 50, 1000),
            'quantity' => fake()->numberBetween(5, 50),
            'description' => fake()->paragraph,
        ];
    }
}
