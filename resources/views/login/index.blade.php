@extends('layouts.main')

@section('container')
    
{{-- <div class="flex justify-center">
    <div class="w-64">
        @if(session()->has('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('LoginError'))
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                {{ session('LoginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
         --}}
    <div class="   flex-col justify-center pb-4">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm py-3">
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">LOGIN
            </h2>
        </div>

        <div class=" bg-blue-200 pl-36 mx-[500px]  py-10 rounded-lg shadow-lg">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        Address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                <div>
                    <button type="submit"
                        class="flex mt-2 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">LOGIN</button>
                </div>
            </form>

            
        </div>
    </div>
    <p class="mt-3 mb-6 text-center text-sm text-gray-500">
        Dont't have an account yet?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register
            Here
        </a>
    </p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection