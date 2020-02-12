<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tags.create');
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
            'name' => 'required|unique:tags',
            'slug' => 'required',
        ]); 
        
        $tag = Tag::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return back()->with(['message' => 'Tag has been added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('back.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('back.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => "required|unique:tags,name,{$tag->id}",
            'slug' => 'required',
        ]); 
        
        $tag->fill([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        $tag->save();

        return back()->with(['message' => 'Tag has been updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back()->with(['message' => 'Tag has been deleted successfully.']);
    }

    /**
     * Display the all resource as datatable ajax data source.
     *
     */
    public function datatable()
    {
        return DataTables::of(Tag::query())
            ->addColumn('action', 'back.tags.datatable.action')
            ->make();
    }

    /**
     * Display the all resource as datatable ajax data source given Tag.
     *
     */
    public function posts(Tag $tag)
    {
        return DataTables::of($tag->posts())
            ->make();
    }
}
