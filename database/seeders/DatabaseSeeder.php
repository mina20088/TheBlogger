<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Passwords;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Passwords::factory(1)->create([
            'user_id' => 1,
        ]);

        Passwords::factory(1)->create([
            'user_id' => 2,
        ]);
    }
}
