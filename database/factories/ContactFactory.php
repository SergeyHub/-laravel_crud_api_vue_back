<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
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
            'destignation' => $this->faker->text(25),
            'contact_no' => $this->faker->text(15),

        ];
    }
}
