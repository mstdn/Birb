<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function store(Post $post)
    {
        $post->like(auth()->user());

        return back();
    }

    public function destroy(Post $post)
    {
        $post->dislike(auth()->user());

        return back();
    }
}
