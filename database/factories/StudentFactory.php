<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => fake()->numberBetween(1000, 2000),
            'student_last_name' => $this->faker->lastName,
            'student_first_name' => $this->faker->firstName,
            'student_mobile_number' => $this->faker->phoneNumber,
            'student_address' => $this->faker->address,
            'student_age' => fake()->numberBetween(16, 60),
            'student_email' => $this->faker->unique()->safeEmail,
            'course_id' => fake()->numberBetween(1, 7)
        ];
    }
}
