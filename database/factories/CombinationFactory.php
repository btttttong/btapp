<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Combination>
 */
class CombinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'top_id' => $this->faker->numberBetween(1,2),
            'bottom_id' => $this->faker->numberBetween(1,2),
            'shoe_id' => $this->faker->numberBetween(1,2), 
            'user_id' => $this->faker->numberBetween(1,2), 
            'date' => $this->faker->dateTimeBetween('now','+30 days'),

        ];
    }
}
