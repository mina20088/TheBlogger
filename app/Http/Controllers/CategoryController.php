<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $posts = $category->posts()->with(['user','category'])->get();

        return view('Home',['posts'=> $posts]);
    }
}
