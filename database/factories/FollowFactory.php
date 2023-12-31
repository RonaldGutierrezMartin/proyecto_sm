<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $maxUserId = DB::table("users")->max("id");
        $follower = $this->faker->randomNumber(1, $maxUserId);
        $followed = $this->faker->randomNumber(1, $maxUserId);
        while($follower == $followed){
            $followed = $this->faker->randomNumber(1, $maxUserId);
        }
        return [
            "follower_id"=>$follower,
            "followed_id"=>$followed
        ];
    }
}
