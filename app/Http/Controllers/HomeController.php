<?php

namespace App\Http\Controllers;

use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user','category')->get();
        return view('Home',['title'=>'Home','posts'=>$posts]);
    }
}
