@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">

    <div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b mt-14">
        <h1 class="text-2xl font-bold">Create New Category</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md " id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md " id="slug" name="slug" readonly required value="{{ old('slug') }}">
                @error('slug')
                <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-lg font-medium text-stone-900">Category Image</label>
                <img class="hidden img-preview mt-2">
                <input class="mt-1 p-2 w-full rounded-md @error('image') border-red-500 @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Category</button>
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

        function previewImage(){
          const image = document.querySelector('#image');
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
