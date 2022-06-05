<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'meat' => $this->faker->boolean,
            'item_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
