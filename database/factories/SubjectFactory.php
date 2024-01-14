<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text($maxNbChars = 50),
            'short_name' => fake()->text($maxNbChars = 5),
            'teacher_id' => fake()->numberBetween(1, 50),
        ];
    }
}
