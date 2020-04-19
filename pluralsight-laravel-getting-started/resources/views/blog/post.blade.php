@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $post->title }}</p>
        </div>
    </div>

    {{-- here we add the likes --}}

    <div class="row">
        <div class="col-md-12">
            <p>{{ count($post->likes) }} Likes </p>
            {{-- make a like button --}}
            <a href="{{ route('blog.post.like',['id' => $post->id]) }}"> Like</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection