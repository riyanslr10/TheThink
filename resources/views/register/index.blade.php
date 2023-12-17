@extends('layouts.main')

@section('container')
    <div class="flex min-h-full flex-col justify-center px-6 pt-20 pb-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm py-6">
            <main class="form-registrasion">
                <h2 class="text-center text-5xl font-bold leading-9 tracking-tight text-stone-600">REGISTER</h2>
            </div>
            <div class="bg-orange-200 pl-[220px] mx-96 pt-1 pb-5 rounded-lg shadow-lg">
                <form action="/register" method="post">
                    @csrf
    
                    {{-- name --}}
                    <div class="form-floating">
                        <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <input id="Name" name="Name" type="text" autocomplete="Name" required class="block w-60 h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('name') is-invalid @enderror" placeholder="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- username --}}
                    <div class="form-floating">
                        <div class="flex items-center justify-between">
                            <label for="Username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        </div>
                        <input id="Username" name="Username" type="text" autocomplete="Username" required
                               class="form-control block w-60 h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('username') is-invalid @enderror"
                               placeholder="username" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- Email --}}
                    <div class="form-floating">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="form-control block w-60 h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('email') is-invalid @enderror"
                               id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- password --}}
                    <div class="form-floating">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-60 h-10 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        @error ('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    <div>
                        <button type="submit"
                                class="flex mt-4 justify-center rounded-md bg-orange-300 bg-opacity-80 hover:bg-orange-400 px-3 py-2 text-lg font-bold leading-6 text-stone-600 shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                            REGISTER
                        </button>
                    </div>
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
