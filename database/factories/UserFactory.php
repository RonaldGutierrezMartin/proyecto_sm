<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id'=>$this->faker->numberBetween(1,3),
            'name'=>$this->faker->firstName(),
            'lastName1'=>$this->faker->lastName(),
            'lastName2'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password()
        ];
    }
}
