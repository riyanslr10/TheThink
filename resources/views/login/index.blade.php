@extends('layouts.main')

@section('container')
<div class="flex-col justify-center pb-4 pt-20">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm py-5">

@if(session()->has('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707 6.359 14.348a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z"/>
                </svg>
            </span>
        </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('LoginError') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707 6.359 14.348a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z"/>
                </svg>
            </span>
        </div>
    @endif
    
    <main class="form-signin">
    {{-- title login --}}
            <h2 class="mt-1 text-center text-5xl font-bold leading-9 tracking-tight text-stone-600">
                    LOGIN
                </h2>
            </div>

            {{-- email --}}
            <div class="bg-orange-200 pl-36 mx-[500px] py-10 rounded-lg shadow-lg">
                <form class="" action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                            Email Address
                        </label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6 form-control @error('email') is-invalid @enderror"
                               id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">

                    </div>
                    {{-- password --}}
                    <div>
                        <div class="form-floating">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900 form-control"
                                   id="password" placeholder="Password" required>
                                Password
                            </label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                   class="block w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6">

                        </div>


                        {{-- button login --}}
                        <div>
                            <button type="submit"
                                    class="flex mt-4 justify-center rounded-md bg-orange-300 bg-opacity-80 hover:bg-orange-400 px-3 py-1.5 text-lg font-bold leading-6 text-stone-600 shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400
                            transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                LOGIN
                            </button>
                        </div>

                </form>
                    
                    <hr class="border-amber-400 sm:mx-auto dark:border-gray-700 mt-5 mb-5">
                    <a href="{{ route('google.login') }}">
                        <button type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                            <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
                            </svg>
                            
                                Sign in with Google
                            </button>
                        </a>
                {{-- <a href="{{route('google.login')}}"
                   class="mb-3 flex w-full items-center justify-center rounded bg-primary">
                    Login With Google
                </a> --}}

            </div>
        </div>
    </main>

    <p class="mt-3 mb-6 text-center text-sm text-gray-500">
        Dont't have an account yet?
        <a href="/register"
           class="font-semibold leading-6 text-amber-600 hover:text-amber-700">Register
            Here
        </a>
    </p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
