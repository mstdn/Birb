<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    // Home feed
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest('created_at')->filter(request(['search', 'user', 'username']))->get()
        ]);
    }
    public function show(Post $post, User $user) {
        return view('posts.show', [
            'post' => $post,
            'user' => $user
        ]);
    }
    public function store(Request $request) {
        // Validate form fields
        $formFields = $request->validate([
            'status' => 'required|min:1|max:500',
            'media' => ['nullable','mimes:mp4,mov,jpg,jpeg,png','max:500048'],
            'gif' => ['nullable','mimes:gif','max:500048'],
        ]);

        if($request->hasFile('media')) {
            $formFields['media'] = $request->file('media')->store('media', 'public');
        }
        if($request->hasFile('gif')) {
            $formFields['media'] = $request->file('gif')->store('media', 'public');
        }
        // Get user_id from auth
        $formFields['user_id'] = auth()->id();

        // Submit data
        Post::create($formFields);

        // Return after success
        return back()->with('message', 'Post published!');
    }
    public function destroy(Post $post) {
        if (! Gate::allows('delete-post', $post)) {
            abort(403);
        }
 
        $post->delete();
        return redirect('/home')->with('message', 'Post deleted successfully');
    }
    
}