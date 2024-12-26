<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fname = fake()->firstName;
        $lname = fake()->lastName;
        return [
            'username' => $fname,
            'fullname' => $fname . " " . $lname,
            'mobile_number' => $this->faker->phoneNumber,
            'role' => fake()->randomElement(['IT Support','Maintenance','Administrative']),
            'password' => bcrypt('password123'), // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    // public function unverified()
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
