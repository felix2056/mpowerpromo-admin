<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'logo' => fake()->imageUrl(),
            'domain' => fake()->domainName(),
            'subdomain' => fake()->userName(),
            'slug' => fake()->slug(),
            'country_code' => fake()->countryCode(),
            'country_flag' => fake()->imageUrl(),
            'phone_number' => fake()->phoneNumber(),
            'extension' => fake()->word(),
            'redirectUrls' => [fake()->url()],
        ];
    }
}
