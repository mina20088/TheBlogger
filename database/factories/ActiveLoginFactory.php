<?php

namespace Database\Factories;

use App\Models\ActiveLogin;
use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ActiveLoginFactory extends Factory
{
    protected $model = ActiveLogin::class;

    public function definition(): array
    {
        return [
            'logout' => Carbon::now(),
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->word(),
            'status' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'session_id' => Session::factory(),
        ];
    }
}
