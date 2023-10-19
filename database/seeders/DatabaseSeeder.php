<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \Schema::withoutForeignKeyConstraints(function (){
            Category::truncate();
            Post::truncate();
            User::truncate();
        });

        $personal = Category::factory()->create([
            'name' => 'personal'
        ]);
        $travel = Category::factory()->create([
            'name' => 'travel'
        ]);

        $Lifestyle = Category::factory()->create([
            'name' => 'lifestyle'
        ]);

        $mina =  User::factory()->create([
            'name' => 'mina remon shaker',
            'username' => 'mina200888',
            'email' => 'minakiroollos@gmail.com'
        ]);

        $beshoy =  User::factory()->create([
            'name' => 'beshoy remon shaker',
            'username' => 'besho',
            'email' => 'besho@gmail.com'
        ]);


        Post::truncate();
        $post_1 = Post::factory()->create([
            'title' => 'Post_1',
            'user_id' => $mina->id,
            'category_id' => $personal->getAttribute('id')
        ]);
        $post_2 = Post::factory()->create([
            'title' => 'Post_2',
            'user_id' => $mina->id,
            'category_id' => $personal->getAttribute('id')
        ]);
        $post_3 = Post::factory()->create([
            'title' => 'Post_3',
            'user_id' => $mina->id,
            'category_id' => $personal->getAttribute('id')
        ]);
        $post_4 = Post::factory()->create([
            'title' => 'Post_4',
            'user_id' => $beshoy->id,
            'category_id' => $Lifestyle->getAttribute('id')
        ]);
        $post_5 = Post::factory()->create([
            'title' => 'Post_5',
            'user_id' => $beshoy->id,
            'category_id' => $Lifestyle->getAttribute('id')
        ]);
        $post_6 = Post::factory()->create([
            'title' => 'Post_6',
            'user_id' => $mina->id,
            'category_id' => $travel->getAttribute('id')
        ]);
        $post_7 = Post::factory()->create([
            'title' => 'Post_7',
            'user_id' => $beshoy->id,
            'category_id' => $travel->getAttribute('id')
        ]);
        $post_8 = Post::factory()->create([
            'title' => 'Post_8',
            'user_id' => $beshoy->id,
            'category_id' => $personal->getAttribute('id')
        ]);
        $post_9 = Post::factory()->create([
            'title' => 'Post_9',
            'user_id' => $mina->id,
             'category_id' => $travel->getAttribute('id')
        ]);
        $post_10 = Post::factory()->create([
            'title' => 'Post_10',
            'user_id' => $beshoy->id,
            'category_id' => $Lifestyle->getAttribute('id')
        ]);
    }
}
