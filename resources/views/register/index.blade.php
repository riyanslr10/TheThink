
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheThink</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])

  </head>
  <body class="bg-no-repeat bg-center bg-cover" style="background-image: url('/img/perpuslogin.jpg')">
    
    <div class="flex min-h-full flex-col justify-center px-6 pt-20 pb-10 lg:px-8">
        <main class="form-registrasion">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm py-6">
                <h2 class="text-center text-5xl font-bold leading-9 tracking-tight text-white">REGISTER</h2>
            </div>

            <div class="bg-orange-200 bg-opacity-60 pl-[220px] mx-96 pt-1 pb-5 rounded-lg shadow-lg">
                <form action="/register" method="post">
                    @csrf
    
                    {{-- name --}}
                    <div class="form-floating">
                        <label for="name" class="block text-sm font-bold leading-6 text-stone-950">Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required class="block w-60 h-10 rounded-md border-0 text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6 @error('name') is-invalid @enderror" placeholder="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- username --}}
                    <div class="form-floating">
                        <div class="flex items-center justify-between">
                            <label for="username" class="block text-sm font-bold leading-6 text-stone-950">Username</label>
                        </div>
                        <input id="username" name="username" type="text" required class="form-control block w-60 h-10 rounded-md border-0 text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6 @error('username') is-invalid @enderror" placeholder="username" value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- Email --}}
                    <div class="form-floating">
                        <label for="email" class="block text-sm font-bold leading-6 text-stone-950">Email Address</label>
                        <input id="email" name="email" type="email" class="form-control block w-60 h-10 rounded-md border-0 text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6 @error('email') is-invalid @enderror" placeholder="name@example.com" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    {{-- password --}}
                    <div class="form-floating">
                        <label for="password" class="block text-sm font-bold leading-6 text-stone-950">Password</label>
                        <input id="password" name="password" type="password"  required class="block w-60 h-10 rounded-md border-0 text-stone-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-300 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror" placeholder="Password">
                        @error ('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    
                        <button type="submit" class="flex mt-4 justify-center rounded-md bg-orange-300 bg-opacity-80 hover:bg-orange-400 px-3 py-2 text-lg font-bold leading-6 text-white shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                            Register
                        </button>
                    
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Tambahkan script Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  </body>
</html>