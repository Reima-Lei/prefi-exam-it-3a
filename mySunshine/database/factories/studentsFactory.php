<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'year' => rand(1, 4),
            'course' => array_rand([
                'BSBA' => 'BSBA',
                'BSIT' => 'BSIT',
                'HRT' => 'HRT',
                'BSA' => 'BSA'
            ]),
            'sex' => array_rand(['MALE', 'FEMALE']),
            'address' => $this->faker->address(),
        ];
    }
}
