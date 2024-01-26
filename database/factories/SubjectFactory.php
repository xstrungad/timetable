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
            'id_course' => fake()->numberBetween(1, 50),
            'name_course' => fake()->words(2, true),
            'abbreviations_course' => fake()->regexify('[A-Z]{3}'),
            'guarantor_course' => fake()->numberBetween(1, 50),
        ];
    }
}
