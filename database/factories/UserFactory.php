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
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'job_title' => fake()->jobTitle(),
            'website' => fake()->url(),
            'country_code' => fake()->countryCode(),
            'phone_number' => fake()->phoneNumber(),
            'extension' => fake()->word(),
            'sales_commission' => fake()->randomFloat(2, 0, 100),
            'sales_admin_commission' => fake()->randomFloat(2, 0, 100),
            'avatar' => fake()->imageUrl(),
            'photo' => fake()->imageUrl(),
            'is_active' => fake()->boolean(),
            'is_registered' => fake()->boolean(),
            'last_login_at' => fake()->dateTime(),
            // 'last_login_ip' => fake()->ipv4(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
