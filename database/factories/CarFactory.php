<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->word(),
            'description'=>fake()->paragraph(),
            'image' => fake()->imageUrl(null, 360, 360, 'animals', true),
            'published'=>fake()->numberBetween(0,1),
            'category_id'=>fake()->numberBetween(1,10),
            ];
    }
}
