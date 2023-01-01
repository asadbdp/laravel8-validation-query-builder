<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = student::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'roll' => rand(2222, 9999),
            'reg' => rand(666666, 999999),
            'session' => '2022-2023',
            'class' => 10
        ];
    }
}
