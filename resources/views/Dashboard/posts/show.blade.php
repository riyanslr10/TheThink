@extends('dashboard.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('container')
<div class="p-4 sm:ml-64">

<div class="container mx-auto">
    <h1 class="font-bold mb-3 mt-20 md:mb-0 text-4xl">{{ $post->title }}</h1>
    <div class="flex flex-col my-3 md:flex-row md:items-center md:justify-between">

        <div class=" space-x-2 py-4 px-4 mt-10">
            <a href="/dashboard/posts" class="rounded-xl bg-green-400 border-8 border-green-400 hover:bg-green-600 hover:border-green-600 text-lg divide-y-4"><span data-feather="arrow-left"></span>Back To All My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-400 border-8 border-yellow-400 hover:bg-yellow-600 hover:border-yellow-600 text-lg rounded-xl divide-y-4"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline border-8 bg-red-400 border-red-400 hover:bg-red-600 hover:border-red-600 rounded-xl">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm ('Are You Sure?')">
                    <span data-feather="x-circle"></span>
                    Delete
                </button>
            </form>
        </div>
    </div>

    <div class="my-3 text-lg">
        <p><strong>Author:</strong> {{ $post->author }}</p>
        <p><strong>Category:</strong> {{ $post->category->name }}</p>
        <p><strong>Publisher:</strong> {{ $post->publisher }}</p>
        <p><strong>Publication Year:</strong> {{ $post->publication_year }}</p>
        <p><strong>Page Count:</strong> {{ $post->page_count }}</p>
        <p><strong>Sinopsis:</strong> {{ $post->sinopsis }}</p>
    </div>

    @if ($post->image)
        <div style="max-height: 1020px; overflow:hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="mt-6 mb-6">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
    @endif

    <article class="my-3 text-lg ">
        {!! $post->body !!}
    </article>
</div>

@endsection
