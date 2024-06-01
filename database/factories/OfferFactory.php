<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomNumber(5),
            'description' => $this->faker->text(),
            'company_id' => Company::factory(),
            'featured' => $this->faker->boolean(),
        ];
    }

    public function notFeatured(): static
    {
        return $this->state(fn (array $attributes) => ['featured' => false]);
    }
}
