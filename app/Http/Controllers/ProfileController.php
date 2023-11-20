<?php

namespace App\Http\Controllers;



use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $fullName = Str::of( auth()->user()->first_name)->append(' ',auth()->user()->last_name);

        return view('profile',[
            'title'=> auth()->user()->first_name ,
            'fullName'=> $fullName]);
    }
}
