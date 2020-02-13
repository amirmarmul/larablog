@extends('front.layouts.app')

@section('title', __('Home'))

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 font-italic">Welcome back</h1>
        <p class="lead my-3">stay hungry, stay creative</p>
    </div>
</div>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo aliquam, deleniti laboriosam, debitis minima id consequuntur minus quo vitae quidem praesentium eaque molestias quas nobis totam aperiam error fugiat accusamus?
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum officia harum quae eligendi repellat perferendis voluptatum eius debitis, quis ab libero, eveniet distinctio magni. Architecto exercitationem incidunt cupiditate provident nostrum?
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse deleniti, eaque, molestias eveniet eius soluta dolor neque earum deserunt, repellendus a illo culpa odio quas ducimus quisquam at repudiandae? Ipsam?</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ex! Tenetur, doloremque. Expedita quis vitae, quasi consectetur sunt minus adipisci rerum? Dolores quos fugiat illum totam quo laudantium optio suscipit!</p>

<div class="latest-post">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ __('Latest Posts') }}</h2>
        </div>
    </div>
    <div class="row">
        @foreach($latestPosts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-post">
                            <h4 class="blog-post-title">
                                <a class="text-muted" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                            </h4>
                            <p>{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-outline-secondary">{{ __('Read more ...') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
