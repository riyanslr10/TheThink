@extends('layouts.main')
@section('container')
    {{-- Detail buku --}}

    <div class="  justify-center  mt-15  pb-14 pt-24">
        <h1 class="flex justify-center text-5xl font-bold  text-stone-600">Detail Book</h1>
        <h1 class="">{{ $post->title }}</h1>
        <a href="#"
            class="flex flex-col items-center  rounded-lg shadow md:flex-row mt-4  h-[27rem] bg-orange-200 border border-orange-300 mx-[400px] overflow-hidden">
            @if ($post->image)
            <img class="object-cover w-full rounded-t-lg h-96 md:h-96 md:w-72 md:rounded-none md:rounded-s-lg  border-8 border-orange-300 ml-7 hover:scale-125"
                src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
            <div class="flex flex-col  leading-normal justify-center pl-12 pr-10 dark:text-stone-600 ">
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