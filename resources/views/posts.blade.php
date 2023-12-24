@extends('layouts.main')

@section('container')

<div class="container">        
        <h1 class="flex justify-center mb-10 pb-10  text-4xl font-bold pt-28 bg-orange-300 text-stone-600">{{ $title }}</h1>
        
        <div class="flex justify-center mb-3">
            <div class="md:w-1/2">
                <form action="/posts">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
        
                    @if(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
        
                    <div class="flex items-center mb-3">
                        <input type="text" class="w-full mx-2 px-4 py-2 border border-orange-200 rounded-l focus:border-orange-300" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="bg-orange-300 text-stone-600 font-bold px-4 py-2 rounded-r" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        

        {{-- CARD BOOK --}}
        @if ($posts->count())
        <div class=" gap-7  md:grid-cols-3 lg:grid-cols-3 pt-2">
            

            {{-- image --}}
            <div class="container">
                <div class="grid grid-cols-3 gap-9 mx-10">
                    @foreach ($posts->skip(0) as $post)
                        <div class="card w-full h-full   md:w-full lg:w-full xl:w-full bg-orange-100 border-4 border-orange-200 rounded-lg shadow hover:bg-orange-200 hover:border-orange-300 mb-4 overflow-hidden" data-aos="fade-right"
                        data-aos-duration="1000">
                            @if ($post->image)
                                <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96 "
                                     src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top "
                                     alt="{{ $post->category->name }}">
                            @endif
                            <div class=" justify-between p-4 pt-12 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                    {{ $post->title }}
                                </h5>
                                <h5 class="mb-2 text-md font-bold tracking-tight text-stone-600 dark:text-white">
                                    By. <a href="/posts?author={{ $post->author }}" class="text-decoration-none">
                                        {{ $post->author }}
                                    </a> {{ $post->created_at->diffForHumans() }}
                                </h5>
                                
                                <a href="/post/{{  $post->slug }}">
                                    <button type="button"
                                            class="text-white bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                                            transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                        DETAIL
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            
                
        </a>
            
        @else
        <p class="text-center fs-4 py-16">No post found.</p>
        @endif 


</div>


<div class="flex justify-center pt-10 pb-10 px-6">
    {{ $posts->links() }}   
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
