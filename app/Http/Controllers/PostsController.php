<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show',[
            'title' => $post->title,
            'post'=>$post
        ]);
    }
}
