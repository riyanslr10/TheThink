@extends('layouts.main')

@section('container')

    <div class="container">
        <h1 class="text-center mb-10 pb-10 text-4xl font-bold pt-28 bg-orange-300 text-stone-600">{{ $title }}</h1>

        <!-- Center the search form -->
        <div class="flex justify-center mb-6"> <!-- Adding justify-center here -->
            <form>
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-orange-500 dark:text-orange-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <input type="search" id="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-orange-50 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                        placeholder="Search" name="search" value="{{ request('search') }}" required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Search</button>
                </div>
            </form>
        </div>

        {{-- CARD BOOK --}}
        @if ($posts->count())
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <div
                        class="card w-full bg-orange-100 border-4 border-orange-200 rounded-lg shadow hover:bg-orange-200 hover:border-orange-300 mb-4">
                        @if ($post->image)
                            <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                        @endif
                        <div class="p-4 pt-12 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                {{ $post->title }}
                            </h5>
                            <h5 class="mb-2 text-md font-bold tracking-tight text-stone-600 dark:text-white">
                                By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                                    {{ $post->author->name }}
                                </a> {{ $post->created_at->diffForHumans() }}
                            </h5>
                            <a href="/post/{{ $post->slug }}">
                                <button type="button"
                                    class="text-white bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
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

    <div class="flex justify-center pt-10 pb-10 px-6">
        {{ $posts->links() }}
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
