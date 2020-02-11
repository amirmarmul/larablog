<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('name')
            ->get();

        return view('back.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'slug' => 'required',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
            'content' => 'nullable',
            'status' => 'required',
        ]); 
        
        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
            'user_id' => Auth::user()->id,
        ]);

        foreach ($request->tags as $tag) {
            $post->tags()->attach($tag);
        }

        return back()->with(['message' => 'Post has been added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('back.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::orderBy('name')
            ->get();
            
        $postTags = $post->tags
            ->pluck('id')
            ->toArray();

        return view('back.posts.edit', compact('post', 'tags', 'postTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => "required|unique:posts,title,{$post->id}",
            'slug' => 'required',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
            'content' => 'nullable',
            'status' => 'required',
        ]); 

        $post->tags()->detach();
        
        $post->fill([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
        ]);

        foreach ($request->tags as $tag) {
            $post->tags()->attach($tag);
        }

        $post->save();

        return back()->with(['message' => 'Post has been updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with(['message' => 'Post has been deleted successfully.']);
    }

    /**
     * Display the all resource as datatable ajax data source.
     *
     */
    public function datatable()
    {
        return DataTables::of(Post::query())
            ->addColumn('action', 'back.posts.datatable.action')
            ->make();
    }
}
