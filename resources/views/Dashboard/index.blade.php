@extends('dashboard.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('container')
{{-- card in dashboard --}}
<div class="p-4 sm:ml-64">
    <div class="p-4 bg-slate-600 border-gray-600 border-8 rounded-lg dark:border-gray-700 mt-14">
        <h1 class="py-2 px-3 mt-10 mb-10 font-extrabold text-4xl">
            Dashboard
        </h1>

               {{-- <div class="grid grid-cols-3 gap-4 mb-4">
                  <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                     <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
                        {{ auth()->user()->name }} memiliki {{ auth()->user()->posts->count() }} Post Books.
                     </p>
                  </div>
                  <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
               </div> --}}

<!-- Jika pengguna adalah admin -->
{{-- @can('admin')
    <!-- Konten lainnya yang hanya tampil jika pengguna adalah admin -->
    <div class="grid grid-cols-3 gap-4 mb-4">
        <!-- Jumlah pengguna (users) -->
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
                {{ \App\Models\User::count() }} Users
            </p>
        </div>
        <!-- Jumlah kategori (categories) -->
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
                {{ \App\Models\Category::count() }} Categories
            </p>
        </div>
        <!-- Jumlah postingan (posts) untuk setiap kategori -->
        <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            @foreach($category as $category)
                <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
                    {{ $category->name }}: {{ $category->posts->count() }} Posts
                </p>
            @endforeach
        </div>
    </div>
@endcan --}}

@if(auth()->user())
<!-- Bagian dengan informasi pengguna yang terautentikasi -->
<div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
        {{ auth()->user()->name }} memiliki {{ auth()->user()->posts->count() }} Posts Books
    </p>
    <!-- Icon atau bagian lainnya -->
</div>
@else
<!-- Jika pengguna belum login -->
<p>Silakan login untuk melihat informasi.</p>
@endif


{{-- 
               <div class="grid grid-cols-2 gap-4 mb-4">
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div> --}}
                  {{-- <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
               </div>
               <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="grid grid-cols-2 gap-4">
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
                  <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                     <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                     </p>
                  </div>
               </div>
            </div>
         </div> --}}
         
@endsection
