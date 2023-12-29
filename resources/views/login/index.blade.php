
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheThink</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom styles can be added here */
    </style>
</head>


<body class="bg-no-repeat bg-center bg-cover mt-20 py-20" style="background-image: url('/img/perpuslogin.jpg')">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="w-full max-w-sm py-5">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707 6.359 14.348a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z" />
                        </svg>
                    </span>
                </div>
            @endif

            @if (session()->has('LoginError'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('LoginError') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707 6.359 14.348a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z" />
                        </svg>
                    </span>
                </div>
            @endif

        </div>
        <main class="form-signin">
            <h1 class="mt-1 text-center text-5xl font-bold leading-9 tracking-tight text-white">LOGIN</h1>
            <div class="bg-orange-300 bg-opacity-60 p-6 rounded-lg shadow-lg max-w-md w-full mt-5">
                <form action="/login" method="POST">
                    <a href="{{ route('google.login') }}" class="google-btn">
                        <button type="button"
                            class="text-white bg-orange-500 bg-opacity-80 hover:bg-orange-400 focus:ring-4 focus:outline-none focus:ring-orange-400 font-medium rounded-lg text-sm px-12 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 ">
                            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 19">
                                <path fill-rule="evenodd"
                                    d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Sign in with Google
                        </button>
                    </a>
                    <div class="flex items-center justify-center my-4 space-x-2">
                        <div class="border-t-2 border-white flex-grow"></div>
                        <h2 class="text-lg font-bold leading-9 tracking-tight text-white">OR</h2>
                        <div class="border-t-2 border-white flex-grow"></div>
                    </div>
                    @csrf
                    <div class="form-floating mb-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-stone-950">Alamat
                            Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('name') is-invalid @enderror"
                            placeholder="name@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form-floating mb-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-stone-950 form-control"
                            id="password" placeholder="Password" required>Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6">
                    </div>
                    <div>
                        <button type="submit"
                            class="block mt-4 justify-center rounded-md bg-orange-500 bg-opacity-80 hover:bg-orange-400 w-full sm:w-60 h-10 text-center text-lg font-bold leading-6 text-white shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </main>
        <p class="mt-3 mb-6 text-center text-sm text-white">
            Don't have an account yet?
            <a href="/register" class="font-semibold leading-6 text-amber-600 hover:text-amber-700">Register Here</a>
        </p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
