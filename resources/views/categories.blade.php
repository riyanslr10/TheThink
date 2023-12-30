@extends('layouts.main')

@section('container')
    <div class="container pt-28 md:pt-28">
        <h1 class="text-3xl font-bold text-center text-stone-600 mb-7   px-6 md:mx-20 lg:mx-60">
            Select the category you are interested in
        </h1>
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center px-4 md:px-10 lg:px-20 pb-10 me-4 ms-4">
            @foreach ($categories as $category)
                {{-- category --}}
                <div
                    class="w-full sm:w-[300px]  border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-8">
                    <div class="flex flex-col">
                        @if ($category->image)
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96"
                            src="{{ asset('storage/'. $category->image) }}" alt="{{ $category->name }}">
                        @else
                        <img class="object-cover w-full h-[200px] rounded-t-lg shadow-lg hover:scale-105 transition-transform duration-300"
                            src="https://source.unsplash.com/500x500?{{ $category->name }}" alt="{{ $category->name }}" />
                        @endif
                        <div class="flex justify-center pt-5">
                            <a href="/posts?category={{ $category->slug }}"
                                class=" px-6 py-2 text-2xl font-bold text-center text-stone-600 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                {{ $category->name }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
