<?php

namespace Database\Factories;

use App\Models\Sandwich;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sandwich>
 */
class SandwichFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $numberOfToppings = fake()->randomDigitNotZero();
        return [
            'name' => fake()->lastName(),
            'number_of_toppings' => $numberOfToppings,
            'toppings' => fake()->words($numberOfToppings, true),
            'vegetarian' => fake()->boolean()
        ];
    }
}
