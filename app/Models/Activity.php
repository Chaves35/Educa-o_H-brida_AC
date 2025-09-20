<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserProgress;
use App\Models\Discipline;
use App\Models\ForumThread;

class Activity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'discipline_id',
        'title',
        'description',
        'type',
    ];

    /**
     * Get the discipline that owns the activity.
     */
    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    /**
     * Get the progress records for the activity.
     */
    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }

    /**
     * Get the forum thread associated with the activity.
     */
    public function forumThread()
    {
        return $this->hasOne(ForumThread::class);
    }
}
