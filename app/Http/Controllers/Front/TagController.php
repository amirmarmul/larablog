<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * 
     */
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)
            ->firstOrFail();

        $posts = $tag->posts()
            ->latest()
            ->simplePaginate(4);

        return view('front.tags.show', compact('tag', 'posts')); 
    }
}
