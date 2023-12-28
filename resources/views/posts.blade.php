@extends('layouts.main')

@section('container')

<div class="container">        
        <h1 class="flex justify-center mb-10 pb-10  text-4xl font-bold pt-28 bg-orange-300 text-stone-600">
            {{ $title }}
        </h1>
        
        <div class="flex justify-center mb-3">
            <div class="md:w-1/2">
                {{-- Form Pencarian --}}
                <form action="/posts" method="GET" id="searchForm" class="flex justify-center mx-auto w-full xl:w-3/4 lg:w-11/12 my-10 rounded-s-xl p-2">
                    {{-- Input Hidden untuk Kategori dan Penulis Posting --}}
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if(request('postauthor'))
                        <input type="hidden" name="postauthor" value="{{ request('postauthor') }}">
                    @endif

                    {{-- Ikon pencarian --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto m-2" style="color: gray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6–6m2–5a7 7 0 11–14 0 7 7 0 0114 0z" />
                    </svg>
                    
                    {{-- Input untuk memasukkan teks pencarian --}}
                    <input type="text" placeholder="Search" id="searchInput" class="w-full focus:outline-none" name="search">
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