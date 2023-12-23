@extends('dashboard.layouts.main')

@section('container')
<div class="container mx-auto">
    <div class="flex flex-col my-3 md:flex-row md:items-center md:justify-between">
        <h1 class="text-2xl font-bold mb-3 md:mb-0">{{ $post->title }}</h1>

        <div class="flex space-x-2">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To All My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm ('Are You Sure?')">
                    <span data-feather="x-circle"></span>
                    Delete
                </button>
            </form>
        </div>
    </div>

    @if ($post->image)
        <div style="max-height: 400px; overflow:hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
    @endif

    <article class="my-3 text-lg">
        {!! $post->body !!}
    </article>
</div>

@endsection
