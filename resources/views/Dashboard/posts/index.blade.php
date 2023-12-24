@extends('dashboard.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('container')
<div class="p-4 sm:ml-64">
  
  
  <div class="mt-10 py-10">
    <h1 class="text-4xl">My Post</h1>

    @if (session()->has('success'))
    <div class="bg-green-500 text-white p-4 mt-4 mb-4">
      {{ session('success') }}
    </div>
    @endif

  </div>
  <div class="mt-5 mb-5">

    <a href="/dashboard/posts/create" class="bg-green-400 border-8 border-green-400 hover:bg-green-600 hover:border-green-600 text-lg rounded-md divide-y-4 bg ">Create New Post</a>
  </div>
  
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-700 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-gray-400 border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">No</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Title</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Category</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Author</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Publisher</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Sinopsis</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Publication Year</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Page Count</th>
              <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Action</th>
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
  
              <a href="/dashboard/posts/{{ $post->slug }}" class="font-medium text-green-600 dark:text-blue-500 hover:underline">
                Show
              </a>
  
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="font-medium text-yellow-500 dark:text-blue-500 hover:underline">
                Edit
              </a>
  
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline">
                @csrf
                @method('delete')
                <button class="font-medium text-blue-600 dark:text-red-500 hover:underline" onclick="return confirm('Are You Sure?')">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection