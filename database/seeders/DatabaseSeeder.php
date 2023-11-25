<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \Schema::withoutForeignKeyConstraints(function (){
            Category::truncate();
            // Post::truncate();
            // User::truncate();
        });

        // $personal = Category::factory()->create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $travel = Category::factory()->create([
        //     'name' => 'Travel',
        //     'slug' => 'travel'
        // ]);

        // $Lifestyle = Category::factory()->create([
        //     'name' => 'Lifestyle',
        //     'slug' => 'lifestyle'
        // ]);

        // $mina =  User::factory()->create([
        //     'first_name' => 'mina',
        //     'last_name' =>'shaker',
        //     'username' => 'mina200888',
        //     'email' => 'minakiroollos@gmail.com',
        //     'password' => 'Hecaro1986@'
        // ]);

        // $beshoy =  User::factory()->create([
        //     'first_name' => 'beshoy',
        //     'last_name' => 'shaker',
        //     'username' => 'besho',
        //     'email' => 'besho@gmail.com',
        //     'password' => 'Hecaro1986@'
        // ]);


        // Post::truncate();
        // $post_1 = Post::factory()->create([
        //     'title' => 'Post_1',
        //     'user_id' => $mina->id,
        //     'category_id' => $personal->getAttribute('id'),
        //     'slug' => Str::slug('post1','_')
        // ]);
        // $post_2 = Post::factory()->create([
        //     'title' => 'Post_2',
        //     'user_id' => $mina->id,
        //     'category_id' => $personal->getAttribute('id'),
        //     'slug' => Str::slug('post2','_')
        // ]);
        // $post_3 = Post::factory()->create([
        //     'title' => 'Post_3',
        //     'user_id' => $mina->id,
        //     'category_id' => $personal->getAttribute('id'),
        //     'slug' => Str::slug('post3','_')
        // ]);
        // $post_4 = Post::factory()->create([
        //     'title' => 'Post_4',
        //     'user_id' => $beshoy->id,
        //     'category_id' => $Lifestyle->getAttribute('id'),
        //     'slug' => Str::slug('post4','_')
        // ]);
        // $post_5 = Post::factory()->create([
        //     'title' => 'Post_5',
        //     'user_id' => $beshoy->id,
        //     'category_id' => $Lifestyle->getAttribute('id'),
        //     'slug' => Str::slug('post5','_')
        // ]);
        // $post_6 = Post::factory()->create([
        //     'title' => 'Post_6',
        //     'user_id' => $mina->id,
        //     'category_id' => $travel->getAttribute('id'),
        //     'slug' => Str::slug('post6','_')
        // ]);
        // $post_7 = Post::factory()->create([
        //     'title' => 'Post_7',
        //     'user_id' => $beshoy->id,
        //     'category_id' => $travel->getAttribute('id'),
        //     'slug' => Str::slug('post7','_')
        // ]);
        // $post_8 = Post::factory()->create([
        //     'title' => 'Post_8',
        //     'user_id' => $beshoy->id,
        //     'category_id' => $personal->getAttribute('id'),
        //     'slug' => Str::slug('post8','_')
        // ]);
        // $post_9 = Post::factory()->create([
        //     'title' => 'Post_9',
        //     'user_id' => $mina->id,
        //      'category_id' => $travel->getAttribute('id'),
        //     'slug' => Str::slug('post9','_')
        // ]);
        // $post_10 = Post::factory()->create([
        //     'title' => 'Post_10',
        //     'user_id' => $beshoy->id,
        //     'category_id' => $Lifestyle->getAttribute('id'),
        //     'slug' => Str::slug('post10','_')
        // ]);


        Category::factory(4)->create();

    }
}
