<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(15),
            'email' => $this->faker->email,
            'address' => $this->faker->text(25),
            'website' => $this->faker->text(15),
        ];
    }
}
