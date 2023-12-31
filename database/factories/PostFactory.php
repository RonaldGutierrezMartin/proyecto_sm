<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $file = asset(":8000/img/kobe.webp");
        $random = $this->faker->numberBetween(0,1);
        return [
            'user_id' => User::factory(),
            'image' => $random == 1 ? $file : NULL,
            'content' => $this->faker->realText()
        ];
    }
}
