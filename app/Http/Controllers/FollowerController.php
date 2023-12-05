<?php

namespace App\Http\Controllers;

use App\Events\NewPost;
use App\Http\Requests\FollowersRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $user)
    {


        $follower = \Auth::user();

        if($follower->username === $user->username)
        {
            return redirect()->route('home.index')->with('failed','you cant follow your self');
        }

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
