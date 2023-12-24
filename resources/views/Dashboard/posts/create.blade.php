@extends('dashboard.layouts.main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

@section('container')
<div class="p-4 sm:ml-64">

    <div class="py-20 font-extrabold text-4xl">
        <h1 class="text-2xl">Create New Post</h1>
    </div>

    <div class="overflow-x-auto shadow-md rounded-lg p-4">

        <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('title') border-red-500 @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-lg font-medium text-gray-700">Slug</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('slug') border-red-500 @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error('slug')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-lg font-medium text-gray-700">Category</label>
                <select class="mt-1 p-2 w-full border rounded-md" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-lg font-medium text-gray-700">Author</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('author') border-red-500 @enderror" id="author" name="author" required value="{{ old('author') }}">
                @error('author')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="publisher" class="block text-lg font-medium text-gray-700">Publisher</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('publisher') border-red-500 @enderror" id="publisher" name="publisher" required value="{{ old('publisher') }}">
                @error('publisher')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="publication_year" class="block text-lg font-medium text-gray-700">Publication Year</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('publication_year') border-red-500 @enderror" id="publication_year" name="publication_year" required value="{{ old('publication_year') }}">
                @error('publication_year')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="page_count" class="block text-lg font-medium text-gray-700">Page Count</label>
                <input type="number" class="mt-1 p-2 w-full border rounded-md @error('page_count') border-red-500 @enderror" id="page_count" name="page_count" required value="{{ old('page_count') }}">
                @error('page_count')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sinopsis" class="block text-lg font-medium text-gray-700">Sinopsis</label>
                <textarea class="mt-1 p-2 w-full border rounded-md @error('sinopsis') border-red-500 @enderror" id="sinopsis" name="sinopsis" required>{{ old('sinopsis') }}</textarea>
                @error('sinopsis')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="image" class="block text-lg font-medium text-gray-700">Post Image</label>
                <img class="hidden img-preview mt-2">
                <input class="mt-1 p-2 w-full border rounded-md @error('image') border-red-500 @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block text-lg font-medium text-gray-700">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                @error('body')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Create Post</button>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();     
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.classList.remove('hidden');
            imgPreview.classList.add('block');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection