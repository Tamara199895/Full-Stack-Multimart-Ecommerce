<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\User;

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
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'roll_type' => $this->faker->randomElement(['admin', 'user']),
            'address' => $this->faker->address,
            'photo' => 'default.jpg', // You may adjust this based on your requirements
            'password' => bcrypt('password123'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'created_at' => now(),
            'created_by' => $this->faker->name,
            'updated_at' => now(),
            'updated_by' => $this->faker->name,
            'deleted' => false,
            'deleted_at' => null,
            'deleted_by' => null,
        ];
    }
}