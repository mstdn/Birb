<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\Followable;


class FollowsController extends Controller
{
    use Followable;
    
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return back();
    }
}
