<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //public function getRouteKeyName() {
    //    return 'username';
    //}

    // User profile
    public function post(User $user) {
        return view('posts.index', [
            'posts' => $user->posts        
        ]);
    }

    public function show(User $user) {
        return view('users.index', [
            'posts' => $user->posts,
            'user' => $user
        ]);
    }
    
    // Logout
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
