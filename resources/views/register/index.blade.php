<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheThink</title>
    <link rel="icon" href="/img/logo baru.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-no-repeat bg-center bg-cover min-h-screen  justify-center items-center"
    style="background-image: url('/img/perpuslogin.jpg')">
    <h2 class="text-center text-4xl lg:text-5xl font-bold leading-tight text-white pt-20 pb-4">REGISTER</h2>
    <div class="flex  items-center justify-center px-4 lg:px-8 ">
        <main class="bg-orange-300 bg-opacity-60 p-6 rounded-lg shadow-lg max-w-md w-full">
            <a href="/">
                <button type="submit"
                    class=" bg-orange-500 bg-opacity-80 hover:bg-orange-400  rounded-lg text-lg font-bold text-white  py-1 px-2 transform hover:-translate-y-1 hover:scale-110 transition duration-300 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512"
                        class="ms-1">
                        <path fill="currentColor"
                            d="M261.56 101.28a8 8 0 0 0-11.06 0L66.4 277.15a8 8 0 0 0-2.47 5.79L63.9 448a32 32 0 0 0 32 32H192a16 16 0 0 0 16-16V328a8 8 0 0 1 8-8h80a8 8 0 0 1 8 8v136a16 16 0 0 0 16 16h96.06a32 32 0 0 0 32-32V282.94a8 8 0 0 0-2.47-5.79Z" />
                        <path fill="currentColor"
                            d="m490.91 244.15l-74.8-71.56V64a16 16 0 0 0-16-16h-48a16 16 0 0 0-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0 0 43 267.56L250.5 69.28a8 8 0 0 1 11.06 0l207.52 198.28a16 16 0 0 0 22.59-.44c6.14-6.36 5.63-16.86-.76-22.97" />
                    </svg>
                    Home
                </button>
            </a>
            <form action="/register" method="post" class="space-y-4">
                @csrf

                {{-- name --}}
                <div>
                    <label for="name" class="block text-sm font-bold text-stone-950">Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"><svg
                                xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                <path fill="currentColor"
                                    d="M16.563 15.9c-.159-.052-1.164-.505-.536-2.414h-.009c1.637-1.686 2.888-4.399 2.888-7.07c0-4.107-2.731-6.26-5.905-6.26c-3.176 0-5.892 2.152-5.892 6.26c0 2.682 1.244 5.406 2.891 7.088c.642 1.684-.506 2.309-.746 2.397c-3.324 1.202-7.224 3.393-7.224 5.556v.811c0 2.947 5.714 3.617 11.002 3.617c5.296 0 10.938-.67 10.938-3.617v-.811c0-2.228-3.919-4.402-7.407-5.557" />
                            </svg>
                        </div>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('name') is-invalid @enderror text-center"
                            placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- username --}}
                <div>
                    <label for="username" class="block text-sm font-bold text-stone-950">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17 17h-5.5l2-2H17M7 17v-2.5l7.9-7.8c.2-.2.5-.2.7 0l1.8 1.8c.2.2.2.5 0 .7L9.5 17M19 5v14H5V5zm0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2" />
                            </svg>
                        </div>
                        <input id="username" name="username" type="text" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('username') is-invalid @enderror text-center"
                            placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-bold text-stone-950">Email </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
                            </svg>
                        </div>
                        <input id="email" name="email" type="email" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('email') is-invalid @enderror text-center"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- password --}}
                <div>
                    <label for="password" class="block text-sm font-bold text-stone-950">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                            </svg>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('password') is-invalid @enderror text-center"
                            placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <p class="  text-md font-bold mt-2">
                        I already have an account?
                        <a href="/login"
                            class="font-semibold leading-6 text-white hover:text-yellow-100 hover:underline">Login
                            Here</a>
                    </p>

                    <button type="submit"
                        class="w-full mt-2 bg-orange-500 bg-opacity-80 hover:bg-orange-400 rounded-md text-lg font-bold text-white py-2 shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-300 transform hover:-translate-y-1 hover:scale-110 transition duration-300">
                        Register
                    </button>

            </form>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Rest of your scripts... -->

</body>

</html>
