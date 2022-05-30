<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
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
            'price' => $this->faker->randomFloat(2, 100, 2400),
            'meet' => $this->faker->boolean(85),
            'item_group_id' => $this->faker->numberBetween(1, 7)
        ];
    }
}
