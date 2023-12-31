<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 mb-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/logo baru.png" class="h-12" />
            <span class="self-center text-4xl font-bold whitespace-nowrap text-amber-700 dark:text-white">TheThink</span>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul
                class="flex flex-col font-bold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-orange-200 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-lg">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-stone-600 hover:bg-gray-100 rounded md:bg-transparent md:text-orange-700 md:p-0 md:dark:text-orange-500 dark:bg-orange-600 md:dark:bg-transparent hover:-translate-y-1 hover:scale-110 duration-300"
                        aria-current="page">Home</a>
                </li>

                <li>
                    <a href="/info"
                        class="block py-2 px-3 text-stone-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:-translate-y-1 hover:scale-110 duration-300">Information</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-stone-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:-translate-y-1 hover:scale-110 duration-300">Category</a>
                </li>

                <!-- Tombol Dropdown User (Hanya muncul jika pengguna sudah login) -->
                @auth
                    <li>
                        <button data-dropdown-toggle="dropdown-user"
                            class="py-2 px-3 text-orange-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Welcome, {{ auth()->user()->name }}
                            <svg class="w-2.5 h-2.5 ms-2.5 inline-block" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <ul class="py-2 text-lg font-bold text-gray-700 dark:text-gray-200 text-center"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/dashboard"
                                        class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:-translate-y-1 hover:scale-110 duration-300">Dashboard</a>
                                </li>

                                <li>
                                    <form action="/logout" method="post" class="py-1">
                                        @csrf
                                        <button type="submit"
                                            class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:-translate-y-1 hover:scale-110 duration-300">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <!-- Navbar untuk Pengguna yang Belum Login -->
                    <li>
                        <a href="/login"
                            class="block py-2 px-3 text-stone-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
