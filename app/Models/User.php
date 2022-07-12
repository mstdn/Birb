<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Followable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Followable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'header_bg',
        'bio',
        'website',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // Get posts count
    public function getPostsCountAttribute()
    {
        return $this->posts()->count();
    }
    // Fetch user home timeline
    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Post::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->orderByDesc('id')
            ->paginate(50);
    }
    // Relation to Post
    public function posts() 
    {
        return $this->hasMany(Post::class)->latest();
    }
    // Relation to likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    // Follow other user
    public function follow(User $user)
    {
        $this->follows()->save($user);
    }
    // Relation to follow
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}
