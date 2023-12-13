@extends('layouts.main')

@section('container')
    
{{-- @if(session()->has('success'))
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
@endif --}}

    <div class="   flex-col justify-center pb-4 pt-20">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm py-5">
            <h2 class="mt-1 text-center text-5xl font-bold leading-9 tracking-tight text-stone-600">LOGIN
            </h2>
        </div>

        <div class=" bg-orange-200 pl-36 mx-[500px]  py-10 rounded-lg shadow-lg">
            <form class="" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        Address
                    </label>
                    <div class="">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                            Password
                        </label>
                        <div class="">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                <div>
                    <button type="submit"
                        class="flex mt-4 justify-center rounded-md bg-orange-300 bg-opacity-80 hover:bg-orange-400 px-3 py-1.5 text-lg font-bold leading-6 text-stone-600 shadow-lg  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        LOGIN</button>
                </div>
            </form>

            
        </div>
    </div>
    <p class="mt-3 mb-6 text-center text-sm text-gray-500">
        Dont't have an account yet?
        <a href="/register" class="font-semibold leading-6 text-amber-600 hover:text-amber-700">Register
            Here
        </a>
    </p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection