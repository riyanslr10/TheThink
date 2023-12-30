@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">

    <div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b">
        <h1 class="text-2xl">Edit Category</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md " id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
                @error('name')
                <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md " id="slug" name="slug" readonly required value="{{ old('slug', $category->slug) }}">
                @error('slug')
                <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Post</button>
        </form>
    </div>
</div>  
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>

@endsection
