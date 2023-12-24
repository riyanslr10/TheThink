@extends('layouts.main')
@section('container')
    
    <div class="container py-16">
        {{-- Detail buku --}}

    <h1 class=" text-center text-5xl font-bold  text-stone-600 pt-8 pb-4">Detail Book</h1>
    
        <div class=" grid grid-cols-2 gap-4 justify-center  mx-[300px]   border-4 border-orange-200 rounded-lg shadow overflow-hidden "> 
            <a href="#"
                class="  bg-orange-100 overflow-hidden">
                @if ($post->image)
                <img class="  rounded-t-lg h-full md:h-full  "
                    src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                    @else
                    <img src="https://source.unsplash.com/400x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="ml-7 mt-3 ">
                    @endif
                <div class="  leading-normal justify-center  dark:text-stone-600 ">
                    <h1 class=" text-2xl  font-extrabold tracking-tight text-stone-600">{{ $post->title }}</h1>
                    <h1 class=" text-2xl font-bold tracking-tight text-stone-600">Category : <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name  }}</a></h1>
                    <p class=" text-xl font-semibold"><strong>Author:</strong> {{ $post->author }}</p>
                    <p class=" text-xl font-semibold"><strong>Publisher:</strong> {{ $post->publisher }}</p>
                    <p class=" text-xl font-semibold"><strong>Publication Year:</strong> {{ $post->publication_year }}</p>
                    <p class=" text-xl font-semibold"><strong>Page Count:</strong> {{ $post->page_count }}</p>
                    {{-- <p class=" text-xl font-semibold">By.<a href="/posts?author={{ $post->author }}" class="text-decoration-none">{{ $post->author }}</a></p> --}}
                    <button type="button" class="text-white text-center md:w-40 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-amber-600font-medium rounded-lg text-lg font-bold px-3 py-2.5 me-2 my-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-700 
                    transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                    Download PDF
                    </button>
                <article class=" fs-5 "> <span class="text-lg font-bold">synopsis :</span>
                    {!! $post->sinopsis !!}
                </article>
                </div>
            </a>
            
        </div>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection