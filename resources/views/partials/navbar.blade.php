<nav class=" shadow-lg relative z-40">
    <div class="bg-white fixed w-full flex flex-wrap items-center justify-between py-1 text-center shadow-xl mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse px-3">
            <img src="/img/logo baru.png" class="h-20" />
            <span class="flex text-2xl sm:text-justify font-bold whitespace-nowrap text-amber-700">TheThink</span>
        </a>
        <div class="flex sm:order-2 md:order-5 pl-24 pr-5">
            <button type="submit" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class=" text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1 hidden">
                <svg class=" w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden sm:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full mt-1 p-2 ps-10 text-sm text-gray-900 border border-gray-100 rounded-lg bg-gray-50 focus:ring-orange-400 focus:border-orange-400  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-orange-400 dark:focus:border-orange-400"
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-900 rounded-lg bg-orange-200 sm:hidden"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="items-center space-x-3 sm:order-1 sm:space-x-0 rtl:space-x-reverse px-5 hidden sm:block">
                <ul class="flex items-center space-x-4 font-bold">
                    @auth
                        <li class="relative group">
                            <button
                                class="flex items-center space-x-1 text-stone-600 text-lg font-bold focus:outline-none focus:ring focus:border-blue-300"
                                id="userMenu" aria-haspopup="true" aria-expanded="false">
                                <span>Welcome, {{ auth()->user()->name }}</span>
                                <svg class="w-4 h-4 text-stone-600 text-lg font-bold group-hover:text-gray-300 transition duration-150 ease-in-out"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0V4a1 1 0 0 1 1-1zm0 8a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-8a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V4a1 1 0 0 1 1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="hidden absolute right-0 mt-2 space-y-2 bg-sttext-stone-600 text-lg font-bold border border-gray-200 rounded-sm shadow-sm"
                                aria-labelledby="userMenu">
                                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard
                                </a>
                                <hr class="border-t border-gray-200">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                        <i class="bi bi-box-arrow-right"></i> Sign Out
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="/login"
                                class="block py-2 px-12 text-lg font-bold text-stone-600 rounded-lg bg-orange-200 focus:ring-4 focus:outline-none focus:ring-orange-300
                                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
        <div class="items-center justify-between w-full sm:flex sm:w-auto sm:order-1" id="navbar-search">
            <div class="relative mt-3 sm:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-amber-600 focus:border-amber-600 "
                    placeholder="Search...">
            </div>
            <ul
                class="flex flex-col p-4 sm:p-0 mt-4  font-bold border border-gray-100 rounded-sm sm:space-x-8 rtl:space-x-reverse sm:flex-row sm:mt-0 sm:border-0 text-left sm:pl-10">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded sm:
                        transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-orange-200"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 sm:bg-orange-200">Category</a>
                </li>

                <li>
                    <a href="/info"
                        class="block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 sm:bg-orange-200">Information</a>
                </li>
                <li>
                    <a href="/login"
                        class="sm:hidden block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
