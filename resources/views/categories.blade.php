@extends('layouts.main')

@section('container')
    <div class="container pt-20">
        <h1 class="flex justify-center text-3xl font-bold pt-6 pb-7  text-stone-600 mx-60 rounded-lg shadow-lg">Select the
            category you are interested in</h1>
        <div class="grid grid-cols-1  md:grid-cols-1 lg:grid-cols-2 pt-8 pb-[50px]">

            <div class="flex pl-24">

                <div class="flex flex-row space-x-10">
                    @foreach ($categories as $category)
                        {{-- category 1 --}}
                        <div
                            class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10 overflow-hidden">
                            <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover hover:scale-125"
                                src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}" />
                            <div class="flex pt-5 mt-4 md:mt-6">
                                <a href="/posts?category={{ $category->slug }}"
                                    class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400 shadow-lg
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                                    {{ $category->name }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
