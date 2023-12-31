 @extends('layouts.main')

 @section('container')
     <div class="container ">
         <h1 class="text-3xl font-bold text-center text-stone-600 mb-7   pb-6 md:mx-20 lg:mx-60">
             Select the category you are interested in
         </h1>
         <div
             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center px-4 md:px-10 lg:px-20 pb-10 me-10 ms-10">
             @foreach ($categories as $category)
                 {{-- category --}}
                 <div
                     class="w-full sm:w-[300px]  border border-orange-400 rounded-lg  dark:bg-gray-800 dark:border-gray-700 mb-8">
                     <div class="flex flex-col">
                         <img class="object-cover w-full h-[200px] rounded-t-lg  "
                             src="https://source.unsplash.com/500x500?{{ $category->name }}" alt="{{ $category->name }}" />
                         <div class="flex justify-center pt-1">
                             <a href="/posts?category={{ $category->slug }}"
                                 class="w-full px-6 py-2 text-xl font-bold text-center text-amber-700  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                 {{ $category->name }}
                             </a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endsection
