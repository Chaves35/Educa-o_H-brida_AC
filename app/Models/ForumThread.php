<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumThread extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity_id',
        'user_id',
        'title',
    ];

    /**
     * Get the activity that owns the forum thread.
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    /**
     * Get the user that created the forum thread.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the posts for the forum thread.
     */
    public function posts()
    {
        return $this->hasMany(ForumPost::class, 'thread_id');
    }
}
