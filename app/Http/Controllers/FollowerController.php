<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $user)
    {
        $follower = \Auth::user();

        $follower->followings()->attach($user);

        return redirect()->route('home.index')->with('success','User Followed Successfully');
    }

    public function unfollow()
    {
        $follower = \Auth::user();

        $follower->followings()->detach();

        return redirect()->route('home.index')->with('success','User unfollowed Successfully');
    }
}
