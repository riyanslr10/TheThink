@extends('dashboard.layouts.main')

@section('container')
    <div class="me-4 ms-4 sm:ml-64">
        <div class="p-4 mt-16  md:mt-[75px]">

            <div class="flex justify-between  font-extrabold items-center pt-3 pb-2 mb-1 ms-9">
                <h1 class="text-4xl">Post Category</h1>
            </div>

            @if (session()->has('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded-lg mb-3 col-lg-6" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="col-lg-6">
                <a href="/dashboard/categories/create"
                    class="bg-blue-500 hover:bg-blue-700 text-stone-900 font-bold px-4 py-2 rounded-lg mb-5 inline-block ms-9">Create
                    New Category</a>

                <table
                    class="md:w-2/3 font-bold text-lg text-left rtl:text-right text-stone-600 dark:text-gray-400 border-8 border-orange-300 ms-9">

                    <thead class="text-xl  text-gray-700 uppercase bg-orange-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-orange-200 border-b-8 border-b-orange-300  dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-4 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                No
                            </th>
                            <th scope="row" class="px-4 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Category</th>
                            <th scope="row" class="px-4 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="hover:bg-gray-50 ">
                                <td class="border-b-8 border-orange-300 px-4 py-4 bg-orange-100">{{ $loop->iteration }}</td>
                                <td class="border-b-8 border-orange-300 px-4 py-4 bg-orange-100">{{ $category->name }}</td>
                                <td class="border-b-8 border-orange-300 px-4 py-4 bg-orange-100">
                                    <div class="flex flex-col items-start">
                                        <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                            class="bg-yellow-400 text-white px-2 py-1 rounded-lg mb-2">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path
                                                    d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                                                <path
                                                    d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                                            </svg>
                                        </a>
                                        <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                            class="inline-block">
                                            @method('delete')
                                            @csrf
                                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg"
                                                onclick="return confirm('Are you sure?')">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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
    </div>
@endsection
