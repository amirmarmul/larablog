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
}
