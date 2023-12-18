<!-- Tambahkan script Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<!-- Bagian body HTML -->
<header x-data="{ isOpen: false }" class="navbar navbar-dark navbar-expand-lg sticky top-0 bg-blue-400 flex-md-nowrap p-1 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-stone-500" href="/dashboard">TheThink</a>

    <div :class="{ 'block': isOpen, 'hidden': !isOpen }" class="w-full md:flex md:items-center md:justify-end">
        <ul class="navbar-nav ms-auto">
        @auth
        <li x-data="{ isOpen: false }" @click.away="isOpen = false" class="relative nav-item dropdown px-5">
            <a @click="isOpen = !isOpen" class="nav-link dropdown-toggle cursor-pointer" role="button" aria-haspopup="true" :aria-expanded="isOpen ? 'true' : 'false'">
                Welcome, {{ auth()->user()->name }}
            </a>
            <ul x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                <li><a class="block px-4 py-2 text-sm text-blue-800 hover:bg-blue-400" href="/"> Home</a></li>
                <li class="border-t border-gray-200"></li>
                <li class="block px-4 py-2 text-sm text-blue-800 hover:bg-blue-400">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit">
                            <span data-feather="log-out"></span> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
        @else
        <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
    </ul>

       <!-- Dropdown menu -->
    <div id="dropdownAvatarName" class="z-10 hidden bg-blue-900 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        @auth
       <div class="px-4 py-3 text-sm text-blue-200 dark:text-white">
           <div class="font-medium ">{{ auth()->user()->name }}</div>
           <div class="truncate">{{ auth()->user()->email }}</div>
       </div>
       <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
       </ul>
       <div class="py-2">
           <a href="/logout" class="block px-4 py-2 text-sm text-blue-200 hover:bg-blue-800">
               Sign out</a>
       </div>
       @endauth
    </div>

</header>
