@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <h1 class="my-3">{{ $post->title }}</h1>
            <div class="mb-3">
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit Post</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline" >
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete post</button>
                </form>
            </div>
            @if ($post->image)
            <div style="max-height:400px; overflow:hidden; ">
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">  
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection