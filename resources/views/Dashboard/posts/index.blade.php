@extends('dashboard.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('container')
<div class="p-4 sm:ml-60">
  
  
  <div class="mt-10 py-10">
    <h1 class="text-4xl font-extrabold">My Post Books</h1>

    @if (session()->has('success'))
    <div class="p-4 mt-4 mb-4">
        @if (session('success') === 'delete')
            <div class="bg-red-500 text-white rounded-md p-4 flex justify-between items-center">
                <span>{{ session('success_message') }}</span>
                <button onclick="this.parentElement.style.display='none'" class="text-white">&times;</button>
            </div>
        @elseif (session('success') === 'edit')
            <div class="bg-yellow-500 text-white rounded-md p-4 flex justify-between items-center">
                <span>{{ session('success_message') }}</span>
                <button onclick="this.parentElement.style.display='none'" class="text-white">&times;</button>
            </div>
        @else
            <div class="bg-green-500 text-white rounded-md p-4 flex justify-between items-center">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.style.display='none'" class="text-white">&times;</button>
            </div>
        @endif
    </div>
@endif
    



  </div>
  <div class="mt-5 mb-5">

    <a href="/dashboard/posts/create" class="bg-green-400 border-8 border-green-400 hover:bg-green-600 hover:border-green-600 text-lg rounded-md divide-y-4 font-bold ">Create New Post</a>

  
  <div class="relative overflow-x-auto border-8 border-gray-700 shadow-md sm:rounded-lg mt-6">
    <table class="w-full text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-gray-400 border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">No</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Title</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Category</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Author</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Publisher</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Sinopsis</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Publication Year</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Page Count</th>
              <th scope="row" class="px-4 py-4 text-gray-900 text-sm whitespace-nowrap dark:text-white">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">{{ $loop->iteration }}</td>
            <td class="px-6 py-4">{{ $post->title }}</td>
            <td class="px-6 py-4">{{ $post->category->name }}</td>
            <td class="px-6 py-4">{{ $post->author }}</td>
            <td class="px-6 py-4">{{ $post->publisher }}</td>
            <td class="px-6 py-4">{{ $post->sinopsis }}</td>
            <td class="px-6 py-4">{{ $post->publication_year }}</td>
            <td class="px-6 py-4">{{ $post->page_count }}</td>
            <td class="px-6 py-4">
              <div class="flex flex-col items-start">
                <a href="/dashboard/posts/{{ $post->slug }}" class="bg-green-500 text-white px-2 py-1 rounded-lg mb-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                        </g>
                    </svg>
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-400 text-white px-2 py-1 rounded-lg mb-2">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                        <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                    </svg>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-2">
                    @csrf
                    @method('delete')
                    <button class="bg-red-500 text-white px-2 py-1 rounded-lg" onclick="return confirm('Are you sure?')">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection