<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::published()
            ->latest()
            ->take(3)
            ->get();

        return view('front.home.index', compact('latestPosts'));
    }
}
