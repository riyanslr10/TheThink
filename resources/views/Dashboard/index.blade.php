@extends('dashboard.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

@section('container')
    {{-- card in dashboard --}}
    <div class="p-4 sm:ml-52">
        <div class="ms-3 me-3 p-4 bg-orange-300 border-orange-400 border-8 rounded-lg dark:border-gray-700 md:mt-28 mt-24">
            <h1 class="px-3  mb-5 font-extrabold text-4xl">
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
            @can('admin')
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
                @foreach(\App\Models\Category::all() as $category)
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                        <p class="text-2xl font-extrabold text-gray-800 dark:text-gray-500">
                            {{ $category->name }}: {{ $category->posts->count() }} Posts
                        </p>
                    </div>
                @endforeach
                
            </div>
        @endcan
        


            @if (auth()->user())
                <!-- Bagian dengan informasi pengguna yang terautentikasi -->
                <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white
                    ms-4" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4" />
                    </svg>
                    <p class="text-3xl font-extrabold text-gray-800 dark:text-gray-500 ml-2 me-4">
                        <a href="/dashboard/posts"> {{ auth()->user()->name }} memiliki {{ auth()->user()->posts->count() }}
                            Posts Books</a>
                    </p>
                    <!-- Icon atau bagian lainnya -->
                </div>
            @else
                <!-- Jika pengguna belum login -->
                <p>Silakan login untuk melihat informasi.</p>
            @endif


        @endsection
