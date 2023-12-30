@extends('layouts.main')

@section('container')

    <div class="container ">
        <h1 class="flex justify-center  text-center text-3xl md:text-4xl font-bold pt-10 md:pt-28  text-stone-600 ms-4">
            {{ $title }}
        </h1>

        <div class="flex justify-center mb-1">
            <div class="md:w-1/2">
                {{-- Form Pencarian --}}
                <form action="/posts" method="GET" id="searchForm"
                    class="flex justify-center mx-auto w-full xl:w-3/4 lg:w-11/12 my-5 rounded-s-xl p-2">
                    {{-- Input Hidden untuk Kategori dan Penulis Posting --}}
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('postauthor'))
                        <input type="hidden" name="postauthor" value="{{ request('postauthor') }}">
                    @endif

                    {{-- Ikon pencarian --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto m-2" style="color: gray" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6–6m2–5a7 7 0 11–14 0 7 7 0 0114 0z" />
                    </svg>

                    {{-- Input untuk memasukkan teks pencarian --}}
                    <input type="text" placeholder="Search" id="searchInput" class="w-full focus:outline-none"
                        name="search">
                </form>
            </div>
        </div>

        {{-- CARD BOOK --}}
        @if ($posts->count())
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3  me-16 ms-16">
                @foreach ($posts as $post)
                    <div class="card   border-4 border-orange-200 rounded-lg shadow  me-9 ms-9 ">
                        @if ($post->image)
                            <img class="object-cover  rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/400x200?{{ $post->category->name }}" class="card-img-top "
                                alt="{{ $post->category->name }}">
                        @endif
                        <div class="p-4 pt-1 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                {{ $post->title }}
                            </h5>
                            <h5 class="mb-2 text-md font-bold tracking-tight text-stone-600 dark:text-white">
                                By. <a href="/posts?postauthor={{ $post->postauthor }}" class="text-decoration-none">
                                    {{ $post->author }}
                                </a> {{ $post->created_at->diffForHumans() }}
                            </h5>
                            <a href="/post/{{ $post->slug }}">
                                <button type="button"
                                    class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg  text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        viewBox="0 0 36 36" class="inline-block">
                                        <path fill="currentColor"
                                            d="M32 6H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2m0 22H4V8h28Z"
                                            class="clr-i-outline clr-i-outline-path-1" />
                                        <path fill="currentColor" d="M9 14h18a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2"
                                            class="clr-i-outline clr-i-outline-path-2" />
                                        <path fill="currentColor" d="M9 18h18a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2"
                                            class="clr-i-outline clr-i-outline-path-3" />
                                        <path fill="currentColor" d="M9 22h10a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2"
                                            class="clr-i-outline clr-i-outline-path-4" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg>
                                    DETAIL
                                </button>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4 py-16">No post found.</p>
        @endif
    </div>

    <div class="flex  justify-center pt-10 pb-10  ">
        {{ $posts->links('/partials/custom-pagination-links-view') }}
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
