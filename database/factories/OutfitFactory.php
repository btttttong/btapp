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
            'type_id' => $this->faker->numberBetween(1, 3),
            'image_url' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'user_id' => $this->faker->numberBetween(1,2), 
            'color_id' => $this->faker->numberBetween(1, 15),
            'ocation_id' => $this->faker->numberBetween(1, 7),
        ];
    }
}
