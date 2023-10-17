<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::truncate();
        $post_1 = Post::factory()->create([
            'title' => 'Post_1'
        ]);
        $post_2 = Post::factory()->create([
            'title' => 'Post_2'
        ]);
        $post_3 = Post::factory()->create([
            'title' => 'Post_3'
        ]);
        $post_4 = Post::factory()->create([
            'title' => 'Post_4'
        ]);
        $post_5 = Post::factory()->create([
            'title' => 'Post_5'
        ]);
        $post_6 = Post::factory()->create([
            'title' => 'Post_6'
        ]);
        $post_7 = Post::factory()->create([
            'title' => 'Post_7'
        ]);
        $post_8 = Post::factory()->create([
            'title' => 'Post_8'
        ]);
        $post_9 = Post::factory()->create([
            'title' => 'Post_9'
        ]);
        $post_10 = Post::factory()->create([
            'title' => 'Post_10'
        ]);
    }
}
