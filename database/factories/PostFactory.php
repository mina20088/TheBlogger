<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(20),
            'content' => $this->faker->sentence(200),
            'excrept' => $this->faker->sentence(10),
            'user_id' => User::factory(),
            'slug'=> $this->faker->slug
        ];
    }
}
