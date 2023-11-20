<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->with(['category','user'])->get();
        return view('Home',[
            'title' => $user->username,
            'posts'=> $posts,
        ]);
    }
}
