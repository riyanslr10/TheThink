@extends('dashboard.layouts.main')

@section('container')


<div class="p-4 sm:ml-64">

    <div class="py-20 font-extrabold text-4xl ">
        <h1 class="text-2x1">Create New Post</h1>
    </div>

    <div class="overflow-x-auto shadow-md rounded-lg p-4 bg-gray-400">

        <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-lg font-medium text-stone-900">Title</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('title') border-red-500 @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-lg font-medium text-stone-900">Slug</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error ('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error ('slug') 
                <div class="invalid-feedbac">
                  {{ $message }}
                </div>
                @enderror
              </div>
      
            <div class="mb-4">
                <label for="category_id" class="block text-lg font-medium text-stone-900">Category</label>
                <select class="mt-1 p-2 w-full border rounded-md" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="author" class="block text-lg font-medium text-stone-900">Author</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('author') border-red-500 @enderror" id="author" name="author" required value="{{ old('author') }}">
                @error('author')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="publisher" class="block text-lg font-medium text-stone-900">Publisher</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('publisher') border-red-500 @enderror" id="publisher" name="publisher" required value="{{ old('publisher') }}">
                @error('publisher')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="publication_year" class="block text-lg font-medium text-stone-900">Publication Year</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md @error('publication_year') border-red-500 @enderror" id="publication_year" name="publication_year" required value="{{ old('publication_year') }}">
                @error('publication_year')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="page_count" class="block text-lg font-medium text-stone-900">Page Count</label>
                <input type="number" class="mt-1 p-2 w-full border rounded-md @error('page_count') border-red-500 @enderror" id="page_count" name="page_count" required value="{{ old('page_count') }}">
                @error('page_count')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sinopsis" class="block text-lg font-medium text-stone-900">Sinopsis</label>
                <textarea class="mt-1 p-2 w-full border rounded-md @error('sinopsis') border-red-500 @enderror" id="sinopsis" name="sinopsis" required>{{ old('sinopsis') }}</textarea>
                @error('sinopsis')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="imageC" class="block text-lg font-medium text-stone-900">Post Image</label>
                <img class="hidden img-preview mt-2">
                <input class="mt-1 p-2 w-full rounded-md @error('imageC') border-red-500 @enderror" type="file" id="imageC" name="imageC" onchange="previewImage()">
                @error('imageC')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block text-lg font-medium text-stone-900">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                @error('body')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-stone-900 font-medium rounded-xl hover:bg-blue-700">Create Post</button>
        </form>

    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
          fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        function previewImage(){
          const image = document.querySelector('#imageC');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>

@endsection