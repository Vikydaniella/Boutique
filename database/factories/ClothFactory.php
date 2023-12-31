<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClothFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fabric' => $this->faker->text,
            'description' => $this->faker->sentence,
            'colour' => $this->faker->text,
        ];
    }
}
