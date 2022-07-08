<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'visibility', 'user_id', 'media', 'nsfw' ];
    // Also load x table related to
    protected $with = ['user'];

    // Search function
    public function scopeFilter($query, array $filters)
    {
        // Search for status
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('status', 'like', '%' . $search . '%'));

        // Search for username per post
        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query
                ->whereHas('user', fn ($query) =>
                $query->where('username', $user)));

        // Search for username per post
        $query->when($filters['username'] ?? false, fn($query, $username) =>
        $query
            ->whereHas('user', fn ($query) =>
            $query->where('username', $username)));
    }

    // Relation to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
