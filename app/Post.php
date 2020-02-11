<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'user_id',
    ];

    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 
     */
    public function scopeDraft($query)
    {
        $query->where('status', 'draft');
    }

    /**
     * 
     */
    public function scopePublished($query)
    {
        $query->where('status', 'published');
    }

    /**
     * 
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
