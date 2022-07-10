<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email_address' => $this->faker->email(),
            'home_phone' => $this->faker->phoneNumber(),
            'mobile_phone' => $this->faker->phoneNumber(),
//          'comments' => $this->faker->words(300)
        ];
    }
}
