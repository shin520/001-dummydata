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
        return [
            'name' => $this->faker->name(),
            'realname' => $this->faker->name(),
            'nickname' => $this->faker->name(),
            'gener' => 0,
            'marital' => $this->faker->name(),
            'place_of_birth' => $this->faker->address(),
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'height' => $this->faker->name(),
            'weight' => $this->faker->name(),
            'hobby' => $this->faker->name(),
            'talent' => $this->faker->name(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text(),
            'job' => $this->faker->jobTitle(),
            'school' => $this->faker->company(),
            'phone' => $this->faker->phoneNumber(),
            'facebook' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'zalo' => $this->faker->url(),
            'line' => $this->faker->phoneNumber(),
            'wechat' => $this->faker->phoneNumber(),
            'twitter' => $this->faker->url(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
