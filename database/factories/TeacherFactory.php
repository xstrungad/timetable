<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName($maxNbChars = 15),
            'lastname' => fake()->lastName($maxNbChars = 20),
            'email' => fake()->email($maxNbChars = 20),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
