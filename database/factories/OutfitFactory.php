<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outfit>
 */
class OutfitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'image_url' => $this->faker->imageUrl(),
            'user_id' => $this->faker->numberBetween(1, 10),
            'color' => $this->faker->randomElement(['red', 'green', 'blue']),
        ];
    }
}
