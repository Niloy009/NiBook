<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function myProfile()
    {
        $posts = Post::with('user')
            ->where('user_id', auth()->user()->id)
            ->latest()
            ->get();

        return view('user.profile', compact('posts'));
    }
}
