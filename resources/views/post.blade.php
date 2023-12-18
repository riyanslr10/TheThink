@extends('layouts.main')
@section('container')
    {{-- Detail buku --}}

    <h1 class=" text-center text-5xl font-bold  text-stone-600 pt-28">Detail Book</h1>
    <h1 class="text-center text-3x1 font-bold  text-stone-600">{{ $post->title }}</h1>
    <div class=" grid grid-rows-1 justify-center  "> 
        <a href="#"
            class="   rounded-lg shadow     bg-orange-200  overflow-hidden mx-80">
            @if ($post->image)
            <img class=" rounded-t-lg h-full md:h-64 lg:h-80 xl:h-96 "
                src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/400x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="">
                @endif
            <div class="  leading-normal justify-center  dark:text-stone-600 ">
                <h5 class=" text-2xl font-bold tracking-tight "><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name  }}</a></h5>
                <p class="mb-3 text-xl font-semibold">By.<a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
                <button type="button"
                    class="text-stone-600 text-center md:w-40 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-amber-600font-medium rounded-lg text-lg font-bold px-3 py-2.5 me-2 mb-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-700 
                    transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                    Download PDF
                </button>
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </a>
        
    </div>
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection