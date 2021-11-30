<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'kelas' => 1,
            'nilai' => rand(00,99), 
            'mapel' => 'Matematika'
        ];
    }
}
