<?php

namespace Database\Factories;

use App\Models\OldPassword;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OldPasswordFactory extends Factory
{
    protected $model = OldPassword::class;

    public function definition(): array
    {
        return [
            'password' => bcrypt($this->faker->password()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
        ];
    }
}
