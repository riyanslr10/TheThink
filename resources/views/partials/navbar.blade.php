<nav class=" shadow-lg relative z-40 ">
    <div class="bg-white bg-opacity-80 fixed w-full flex flex-wrap items-center justify-between  py-1 text-center shadow-xl">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse px-3">
            <img src="/img/logo baru.png" class="h-20"  />
            <span class="self-center text-2xl font-bold whitespace-nowrap text-amber-700">TheThink</span>
        </a>
        <div class="flex md:order-2 pl-24">
            <button type="submit" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full mt-1 p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-orange-400 focus:border-orange-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-400 dark:focus:border-orange-400"
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-lg text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse px-5 ">
                <ul class="flex items-center space-x-4">
                    @auth
                        <li class="relative group">
                            <button
                                class="flex items-center space-x-1 text-stone-600 text-lg font-bold focus:outline-none focus:ring focus:border-blue-300"
                                id="userMenu"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <span>Welcome, {{ auth()->user()->name }}</span>
                                <svg
                                    class="w-4 h-4 text-stone-600 text-lg font-bold group-hover:text-gray-300 transition duration-150 ease-in-out"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 3a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0V4a1 1 0 0 1 1-1zm0 8a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-8a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V4a1 1 0 0 1 1-1z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                            <div
                                class="hidden absolute right-0 mt-2 space-y-2 bg-sttext-stone-600 text-lg font-bold border border-gray-200 rounded-md shadow-md"
                                aria-labelledby="userMenu"
                            >
                                <a
                                    href="/dashboard"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                >
                                    <i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard
                                </a>
                                <hr class="border-t border-gray-200">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                                    >
                                        <i class="bi bi-box-arrow-right"></i> Sign Out
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li>
                            <a
                                href="/login"
                                class="block py-2 px-12 text-lg font-bold text-stone-600 rounded-lg bg-orange-200 focus:ring-4 focus:outline-none focus:ring-orange-300
                                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 "
                            >
                                <i class="bi bi-box-arrow-in-right"></i> Sign In
                            </a>
                        </li>
                    @endauth
                </ul>
                
            </div>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
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
                class="flex flex-col p-4 md:p-0 mt-4  font-bold border border-gray-100 rounded-sm md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg  
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">Category</a>
                </li>
                <li>
                    <a href="/info"
                        class="block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">Information</a>
                </li>
            </ul>
        </div>
    </div>
</nav>