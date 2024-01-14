<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id'=> fake()->numberBetween(1, 50),
            'day'=> fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'class_start'=> fake()->randomElement(['7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']),
            'class_end' => fake()->randomElement(['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00']),
            'room' => fake()->numberBetween(1, 600),
            'circle' => fake()->text($maxNbChars = 10),
            'year' => fake()->year(),
            'form' => fake()->randomElement(['Lecture', 'Seminar', 'Laboratory exercise', 'Practice', 'Project']),
            'teacher_id'=> fake()->numberBetween(1, 50),
        ];
    }
}
