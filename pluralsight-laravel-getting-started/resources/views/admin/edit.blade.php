@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                            type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input
                            type="text"
                            class="form-control"
                            id="content"
                            name="content"
                            value="{{ $post->content}}">
                </div>
                {{-- here we loop the tags --}}

@foreach($tags as $tag)
    <div class="checkbox">

    {{-- so here when we submit form we have a checkbox to add tag  
    and in the name tags[] array will give use store multiple tags in html form
    --}}
        <label>

        {{-- in the edit we just add a logic to see if the checkbox is already checked --}}
            <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>{{ $tag->name }}
        </label>
    </div>

@endforeach








                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $postId }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection