<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistical>
 */
class StatisticalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->now(),
            'type' => fake()->randomNumber(1),
            'total' => fake()->randomNumber(1200000),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
