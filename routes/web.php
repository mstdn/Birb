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
    Route::get('/', [HomeController::class, 'index'])->name('landing');
});

Route::get('/home', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::post('/post/create', [PostController::class, 'store'])->name('create-post');

Route::get('@{user:username}', [UserController::class, 'show']);

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // Logout
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
// About, terms & privacy
Route::group(['prefix' => 'about'], function () {
    Route::get('privacy', [PageController::class, 'privacy']);
    Route::get('terms', [PageController::class, 'terms']);
});