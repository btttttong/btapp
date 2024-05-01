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
        // return [
        //     'name' => $this->faker->name(),
        //     'description' => $this->faker->text(),
        //     'image_url' => $this->faker->imageUrl(),
        //     'user_id' => $this->faker->numberBetween(1, 10),
        //     'color' => $this->faker->randomElement(['red', 'green', 'blue']),
        // ];

        return [
            'type' => $this->faker->randomElement(['Casual', 'Formal', 'Sport', 'Traditional']),
            'image_url' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'user_id' => $this->faker->numberBetween(1,2), 
            'color' => $this->faker->safeColorName(),
            'ocation_id' => $this->faker->numberBetween(1, 7),
        ];
    }
}
