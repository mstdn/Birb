<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ViewErrorBag;

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
    // User settings index
    public function settings(User $user) {
        return view('settings.index', [
            'user' => $user
        ]);
    }
    // User settings account
    public function settingsAccount(User $user) {
        return view('settings.account', [
            'user' => $user
        ]);
    }
    // Change password view
    public function changePassword() {
        return view('user.settings.password');
    }
    public function updatePassword(Request $request) {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        # Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error', 'Old password does not match.');
        }
        # Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with('status', 'Password changed successfully.');
    }
    // User settings index
    public function settingsProfile(User $user) {
        return view('settings.profile', [
            'user' => $user
        ]);
    }
    // Update display name, bio and website
    public function updateProfile(Request $request) {
        // Validate fields
        $request->validate([
            'name' => 'nullable|max:30',
            'bio' => 'nullable|max:150',
            'website' => 'nullable'
        ]);
        # Update the name and bio
        User::whereId(auth()->user()->id)->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'website' => $request->website
        ]);
        return back()->with('status', 'Profile updated.');
    }

    // Update avatar
    public function updateAvatar(Request $request) {
        // Validate fields
        $request->validate([
            'avatar' => ['required','mimes:jpg,jpeg,png','max:10048']
        ]);
        $avatar = $request->file('avatar')->store('uploads/avatars', 'public');
        User::whereId(auth()->user()->id)->update([
            'avatar' => $avatar
        ]);
        
        // Return back
        return back()->with('status', 'Avatar updated.');
    }
    // Update cover
    public function updateCover(Request $request) {
        // Validate fields
        $request->validate([    
            'header_bg' => ['required','mimes:jpg,jpeg,png','max:10048']
        ]);
        $cover = $request->file('header_bg')->store('uploads/covers', 'public');
        User::whereId(auth()->user()->id)->update([
            'header_bg' => $cover
        ]);
        // Return back
        return back()->with('status', 'Cover updated.');
    }

}
