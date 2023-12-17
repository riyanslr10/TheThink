@extends('layouts.main')

@section('container')

<div class="container">        
        <h1 class="flex justify-center mb-10 pb-10 pl-44 text-4xl font-bold pt-28 bg-orange-300 text-stone-600">{{ $title }}</h1>
        {{-- <div class="flex   bg-orange-300 pb-2 pl-44 rounded-b-xl shadow-lg">
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Novel</a>
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Education</a>
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Children</a>

        </div> --}}
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
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l focus:outline-none" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="bg-orange-300 text-stone-600 font-bold px-4 py-2 rounded-r" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        

        {{-- CARD BOOK --}}
        @if ($posts->count())
        <div class="grid grid-cols-1 gap-7 ml-44 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-2">
            {{-- <a href="/post" class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                @if ($posts[0]->image)
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                {{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                @else
                <img src="https://source.unsplash.com/200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="flex flex-col p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                        <a href="/posts/{{  $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name   }}</a> in <a href="/posts?category={{ $posts[0]->category->slug  }}" class="text-decoration-none">{{ $posts[0]->category->name}}
                        </a>{{ $posts[0]->created_at->diffForHumans() }}
                    </h5>
                    <a href="/post/{{  $posts[0]->slug }}">
                        <button type="button" class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                            transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                            DETAIL
                        </button>
                    </a>
                </div>
            </a> --}}

            {{-- image --}}
            <div class="container">
                <div class="flex flex-wrap">
                    @foreach ($posts->skip(0) as $post)
                        <div class="card w-full ml-4 mr-4  md:w-1/2 lg:w-1/3 xl:w-1/4 bg-orange-100 border-4 border-orange-200 rounded-lg shadow hover:bg-orange-200 hover:border-orange-300 mb-4 md:flex-row">
                            @if ($post->image)
                                <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96"
                                     src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                     alt="{{ $post->category->name }}">
                            @endif
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                    {{ $post->title }}
                                </h5>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                                        {{ $post->author->name }}
                                    </a> {{ $post->created_at->diffForHumans() }}
                                </h5>
                                
                                <a href="/post/{{  $post->slug }}">
                                    <button type="button"
                                            class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300 rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
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
        <p class="text-center fs-4">No post found.</p>
        @endif 


</div>


<div class="flex justify-center pt-10 pb-10">
    {{ $posts->links() }}   
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
