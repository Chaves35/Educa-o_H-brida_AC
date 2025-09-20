<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'area',
        'grade_level',
    ];

    /**
     * Get the activities for the discipline.
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
