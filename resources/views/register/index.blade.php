<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheThink</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-no-repeat bg-center bg-cover mt-20 py-20" style="background-image: url('/img/perpuslogin.jpg')">
    <h2 class="text-center text-4xl lg:text-5xl font-bold leading-tight text-white mb-5">REGISTER</h2>
    <div class="flex min-h-screen items-center justify-center px-4 lg:px-8 mt-15">
        <main class="bg-orange-300 bg-opacity-60 p-6 rounded-lg shadow-lg max-w-md w-full">
            <form action="/register" method="post" class="space-y-4">
                @csrf

                {{-- name --}}
                <div>
                    <label for="name" class="block text-sm font-bold text-stone-950">Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" required
                        class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('name') is-invalid @enderror"
                        placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- username --}}
                <div>
                    <label for="username" class="block text-sm font-bold text-stone-950">Username</label>
                    <input id="username" name="username" type="text" required
                        class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('username') is-invalid @enderror"
                        placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-bold text-stone-950">Email Address</label>
                    <input id="email" name="email" type="email" required
                        class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('email') is-invalid @enderror"
                        placeholder="name@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- password --}}
                <div>
                    <label for="password" class="block text-sm font-bold text-stone-950">Password</label>
                    <input id="password" name="password" type="password" required
                        class="w-full h-10 rounded-md border text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 text-sm leading-6 @error('password') is-invalid @enderror"
                        placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-orange-500 bg-opacity-80 hover:bg-orange-400 rounded-md text-lg font-bold text-white py-2 shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-300 transform hover:-translate-y-1 hover:scale-110 transition duration-300">
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
