<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [PostController::class, 'index'])->name('landing');
});

Route::get('/home', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/post/create', [PostController::class, 'store'])->name('create-post');

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
    // Logout
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
// About, terms & privacy
Route::group(['prefix' => 'about'], function () {
    Route::get('privacy', [PageController::class, 'privacy']);
    Route::get('terms', [PageController::class, 'terms']);
});