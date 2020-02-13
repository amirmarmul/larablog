<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
    protected $appends = [
        'excerpt',
        'human_timestamp',
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

    /**
     * 
     */
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 200);
    }

    /**
     * 
     */
    public function getHumanTimestampAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
