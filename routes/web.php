<?php

use App\Http\Controllers\PostCommentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [PostController::class, 'index'])->name('landing');
});
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post');
Route::post('/post/create', [PostController::class, 'store'])->name('create-post');
Route::delete('posts/{post}', [PostController::class, 'destroy']);
Route::post('posts/{post}/reply', [PostCommentsController::class, 'store'])->name('reply');
Route::get('@{user:username}', [UserController::class, 'show']);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [UserController::class, 'settings'])->name('settings');
        Route::get('account', [UserController::class, 'settingsAccount'])->name('settings-account');
        Route::get('profile', [UserController::class, 'settingsprofile'])->name('settings-profile');
        Route::post('profile/update', [UserController::class, 'updateProfile'])->name('settings-profile-update');
        Route::get('avatar', [UserController::class, 'settingsAvatar'])->name('settings-avatar');
        Route::post('avatar/update', [UserController::class, 'updateAvatar'])->name('settings-avatar-update');
        Route::post('cover/update', [UserController::class, 'updateCover'])->name('settings-cover-update');
    });
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
Route::group(['prefix' => 'about'], function () {
    Route::get('privacy', [PageController::class, 'privacy']);
    Route::get('terms', [PageController::class, 'terms']);
});