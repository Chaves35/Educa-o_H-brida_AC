<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the user's progress records.
     */
    public function progress()
    {
        return $this->hasMany(UserProgress::class);
    }

    /**
     * Get the user's forum posts.
     */
    public function forumPosts()
    {
        return $this->hasMany(ForumPost::class);
    }

    /**
     * Get the user's glossary terms.
     */
    public function glossaryTerms()
    {
        return $this->hasMany(GlossaryTerm::class);
    }

    /**
     * Get the user's forum threads.
     */
    public function forumThreads()
    {
        return $this->hasMany(ForumThread::class);
    }
}
