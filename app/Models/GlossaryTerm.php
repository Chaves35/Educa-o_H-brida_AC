<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlossaryTerm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'discipline_id',
        'user_id',
        'term',
        'definition',
    ];

    /**
     * Get the discipline that owns the glossary term.
     */
    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    /**
     * Get the user that created the glossary term.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
